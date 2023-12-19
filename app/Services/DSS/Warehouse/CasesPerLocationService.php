<?php

namespace App\Services\DSS\Warehouse;

class CasesPerLocationService
{
    public function calculateCasesPerLocation($data)
    {
        $casesPerLocation = [];

        foreach ($data as $entry) {
            $location = $entry['location'];

            // Count occurrences of each location
            $casesPerLocation[$location] = isset($casesPerLocation[$location]) ? $casesPerLocation[$location] + 1 : 1;
        }

        return $casesPerLocation;
    }

    public function calculateTotalCasesPerLocation($data)
    {
        $totalCasesPerLocation = [];

        foreach ($data as $entry) {
            $location = $entry['location'];

            // Sum total cases for each location
            $totalCasesPerLocation[$location] = isset($totalCasesPerLocation[$location])
                ? $totalCasesPerLocation[$location] + 1  // Increment the count for each occurrence
                : 1;  // Initialize the count if it's the first occurrence
        }

        return $totalCasesPerLocation;
    }

    public function getTableData($data)
    {
        $tableData = [];
        $casesPerLocation = $this->calculateCasesPerLocation($data);

        foreach ($casesPerLocation as $location => $count) {
            $tableData[] = [
                'location' => $location,
                'total_cases' => $count,
            ];
        }

        return $tableData;
    }
}
