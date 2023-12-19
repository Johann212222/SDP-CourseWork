<?php

namespace App\Controllers;

use App\Models\FirebaseModel;
use App\Services\DSS\Warehouse\CasesAllTimeChartService;
use App\Services\DSS\Warehouse\TotalCasesService;
use App\Services\DSS\Warehouse\TotalTypesOfCasesService;
use App\Services\DSS\Warehouse\CasesPerLocationService;
use CodeIgniter\Controller;

class WarehouseController extends Controller
{
    protected $firebaseModel;
    protected $casesAllTimeChartService;
    protected $totalCasesService;
    protected $totalTypesOfCasesService;
    protected $casesPerLocationService;

    public function __construct()
    {
        $this->firebaseModel = new FirebaseModel();
        $this->casesAllTimeChartService = new CasesAllTimeChartService();
        $this->totalCasesService = new TotalCasesService();
        $this->totalTypesOfCasesService = new TotalTypesOfCasesService();
        $this->casesPerLocationService = new CasesPerLocationService();
    }

    public function index()
    {
        $data = $this->getData();

        return view('warehouse', $data);
    }

    protected function getData()
    {
        $firebaseData = $this->firebaseModel->getData('/data/');

        $chartData = $this->casesAllTimeChartService->processChartData($firebaseData);
        $totalCases = $this->totalCasesService->calculateTotalCases($firebaseData);
        $totalTypes = $this->totalTypesOfCasesService->calculateTotalTypesOfCases($firebaseData);
        $casesPerLocation = $this->casesPerLocationService->calculateCasesPerLocation($firebaseData);
        $totalCasesPerLocation = $this->casesPerLocationService->calculateTotalCasesPerLocation($firebaseData);
        $tableData = $this->casesPerLocationService->getTableData($firebaseData);

        return [
            'chartData' => $chartData,
            'totalCases' => $totalCases,
            'totalTypes' => $totalTypes,
            'casesPerLocation' => $casesPerLocation,
            'totalCasesPerLocation' => $totalCasesPerLocation,
            'tableData' => $tableData,
        ];
    }
}
