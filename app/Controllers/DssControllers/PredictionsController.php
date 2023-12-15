<?php

namespace App\Controllers;

//loading the models & services
use App\Models\FirebaseModel;
use App\Services\DSS\Predictions\TotalCasesPredictionService;
use App\Services\DSS\Predictions\TotalCasesPerDateForLocationService;
use App\Services\DSS\Predictions\LocationsPerDateService;
use App\Services\DSS\Predictions\TypesForDateService;
use App\Services\DSS\Predictions\TypesForDateAndLocationService;
use CodeIgniter\Controller;

class PredictionsController extends Controller
{
    protected $totalCasesPrediction;
    protected $totalCasesPerDateForLocation;
    protected $locationsPerDate;
    protected $typesForDate;
    protected $typesForDateAndLocation;
    protected $firebaseModel;

    public function __construct()
    {
        $this->totalCasesPrediction = new TotalCasesPredictionService();
        $this->totalCasesPerDateForLocation = new TotalCasesPerDateForLocationService();
        $this->locationsPerDate = new LocationsPerDateService();
        $this->typesForDate = new TypesForDateService();
        $this->typesForDateAndLocation = new TypesForDateAndLocationService();
        $this->firebaseModel = new FirebaseModel();
    }

    //main method
    public function index()
    {
        $data = $this->getData();

        return view('predictions', $data);
    }

    //method to get data from view and manipulate them using services
    protected function getData()
    {
        $data = [];
        
        $firebaseData = $this->firebaseModel->getData('/');
        $dateRange = $this->request->getGet('dateRange') ?? 30;
        $totalPredictionsDateRange = 30;

        $predictionCounts = $this->totalCasesPrediction->simulateNHPP($firebaseData, $dateRange);
        $data['predictionCounts'] = $predictionCounts;

        $nhppRegression = $this->totalCasesPrediction->linearRegression(array_values($predictionCounts));
        $data['nhppRegression'] = $nhppRegression;

        $theoreticalGraph = $this->totalCasesPrediction->calculateTheoreticalGraph($predictionCounts);
        $data['theoreticalRegression'] = $this->totalCasesPrediction->linearRegression(array_values($theoreticalGraph));

        $growthPercentage = $this->totalCasesPrediction->calculateGrowthPercentage($data['theoreticalRegression'], $nhppRegression);
        $data['growthPercentage'] = $growthPercentage;

        $totalPredictions = array_sum(array_slice($predictionCounts, 0, $totalPredictionsDateRange));
        $data['totalPredictions'] = $totalPredictions;

        $locations = $this->totalCasesPerDateForLocation->getUniqueLocations($firebaseData);
        $data['locations'] = $locations;

        $data['chartLabels'] = [];
        $data['chartData'] = [];

        $selectedLocation = 'Parramatta';
        $selectedLocation2 = 'Parramatta';
        if ($this->request->getMethod() === 'post' && $this->request->getPost('selectedDate')) {
            $selectedDate = $this->request->getPost('selectedDate');
            $complaintData = $this->firebaseModel->getData('/');
            $predictionsHTML = $this->locationsPerDate->simulateEvents($selectedDate, $complaintData, $data);
            $data['predictionsHTML'] = $predictionsHTML;
        }
           
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $submittedLocation = $this->request->getPost('location');
            if ($submittedLocation) {
                $selectedLocation = $submittedLocation;
            }
        }
        
        if ($this->request->getMethod() === 'post' && $this->request->getPost('selectedDate')) {
            // Form is submitted
            $selectedDate = $this->request->getPost('selectedDate');
        
            // Use the TypesForDateService to predict cases for the selected date
            $typesForDatePredictions = $this->typesForDate->predictCasesForDate($selectedDate, $complaintData);
        
            // You can use $typesForDatePredictions as needed in your view
            $data['typesForDatePredictions'] = $typesForDatePredictions;
        }

        if ($this->request->getMethod() === 'post' && $this->request->getPost('selectedDate')) {
            // Form is submitted
            $selectedDate = $this->request->getPost('selectedDate');
            $selectedLocation2 = $this->request->getPost('selectedLocation2');

            // Use the TypesForDateAndLocationService to predict cases for the selected date and location
            $typesForDateAndLocationPredictions = $this->typesForDateAndLocation->predictCasesForDateAndLocation($selectedDate, $selectedLocation2, $complaintData);

            // You can use $typesForDateAndLocationPredictions as needed in your view
            $data['typesForDateAndLocationPredictions'] = $typesForDateAndLocationPredictions;
        }

        $locationPredictions = $this->totalCasesPerDateForLocation->getTotalPredictionsForLocation($selectedLocation, 30);

        $data['chartLab'] = array_keys($locationPredictions);
        $data['chartDat'] = array_values($locationPredictions);
        $data['selectedLocation'] = $selectedLocation;

        return $data;
    }
}