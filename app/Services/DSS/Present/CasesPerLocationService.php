<?php

namespace App\Services\DSS\Present;

class CasesPerLocationService
{
    public function calculateCasesPerLocation($firebaseData, $startDate, $endDate)
    {
        // Assuming $firebaseData is an array of data from Firebase

        // Filter data for the latest 30 days
        $filteredData = array_filter($firebaseData, function ($entry) use ($startDate, $endDate) {
            $entryDate = $entry['Date']; // Adjust this based on your actual data structure
            return $entryDate >= $startDate && $entryDate <= $endDate;
        });

        // Calculate total occurrences per unique location
        $casesPerLocation = [];
        foreach ($filteredData as $entry) {
            $location = $entry['location']; // Adjust this based on your actual data structure
            $casesPerLocation[$location] = isset($casesPerLocation[$location]) ? $casesPerLocation[$location] + 1 : 1;
        }

        // Prepare data for the pie chart
        $pieChartData = [];
        foreach ($casesPerLocation as $location => $count) {
            $pieChartData[] = [
                'label' => $location,
                'value' => $count,
            ];
        }

        return $pieChartData;
    }

    
}