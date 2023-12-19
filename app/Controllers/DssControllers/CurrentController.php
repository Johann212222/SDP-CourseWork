<?php

namespace App\Controllers;

use App\Models\FirebaseModel;
use App\Services\DSS\Present\GrowthRateService;
use App\Services\DSS\Present\TotalOccurencesService;
use App\Services\DSS\Present\TotalCasesInChartService;
use App\Services\DSS\Present\CasesPerLocationService; 
use App\Services\DSS\Present\TypesOfCasesService;
use App\Services\DSS\Present\TimeOfCasesService; // Add this line
use CodeIgniter\Controller;

class CurrentController extends Controller
{
    protected $firebaseModel;
    protected $growthRateService;
    protected $totalOccurrencesService;
    protected $casesPerLocationService; 
    protected $lineChartService; 
    protected $typesOfCasesService;
    protected $timeOfCasesService; // Add this line

    public function __construct()
    {
        $this->firebaseModel = new FirebaseModel();
        $this->growthRateService = new GrowthRateService();
        $this->totalOccurrencesService = new TotalOccurencesService();
        $this->casesPerLocationService = new CasesPerLocationService(); 
        $this->lineChartService = new TotalCasesInChartService();
        $this->typesOfCasesService = new TypesOfCasesService();
        $this->timeOfCasesService = new TimeOfCasesService(); // Add this line
    }

    public function index()
    {
        $data = $this->getData();

        return view('current', $data);
    }

    protected function getData()
    {
        $data = [];

        $currentDate = date('Y-m-d');
        $thirtyDaysAgo = date('Y-m-d', strtotime('-30 days'));
        $sixtyDaysAgo = date('Y-m-d', strtotime('-60 days'));

        $firebaseData = $this->firebaseModel->getData('/data/', [
            'orderBy' => '"Date"',
            'startAt' => '"' . $sixtyDaysAgo . '"',
            'endAt' => '"' . $currentDate . '"',
        ]);

        $totalOccurrencesData = $this->totalOccurrencesService->calculateTotalOccurrences($firebaseData, $thirtyDaysAgo, $currentDate);

        $oldest30DaysOccurrencesData = $this->totalOccurrencesService->calculateTotalOccurrences($firebaseData, $sixtyDaysAgo, $thirtyDaysAgo);

        $growthRate = $this->growthRateService->calculateGrowthRate(
            $totalOccurrencesData['totalOccurrences'],
            $oldest30DaysOccurrencesData['totalOccurrences']
        );

        $data['dateOccurrences'] = $totalOccurrencesData['dateOccurrences'];
        $data['totalOccurrences'] = $totalOccurrencesData['totalOccurrences'];
        $data['oldest30DaysOccurrences'] = $oldest30DaysOccurrencesData['dateOccurrences'];
        $data['growthRate'] = $growthRate;

        // Use the LineChartService to generate data for Chart.js line chart
        $lineChartData = $this->lineChartService->generateLineChartData($totalOccurrencesData['dateOccurrences']);

        // Add line chart data to the $data array
        $data['lineChartData'] = $lineChartData;

        $casesPerLocationData = $this->casesPerLocationService->calculateCasesPerLocation($firebaseData, $thirtyDaysAgo, $currentDate);

        // Add pie chart data to the $data array
        $data['casesPerLocationData'] = $casesPerLocationData;

        // Use the TypesOfCasesService to generate data for Chart.js bar chart
        $typesOfCasesData = $this->typesOfCasesService->calculateTypesOfCases($firebaseData, $thirtyDaysAgo, $currentDate);

        // Add bar chart data to the $data array
        $data['typesOfCasesData'] = $typesOfCasesData;

        // Use the TimeOfCasesService to generate data for Chart.js line chart
        $timeOfCasesData = $this->timeOfCasesService->calculateTimeOfCases($firebaseData, $thirtyDaysAgo, $currentDate);

        // Add line chart data to the $data array
        $data['timeOfCasesData'] = $timeOfCasesData;

        return $data;    
    }
}
