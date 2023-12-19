<?php

namespace App\Services\DSS\Present;

class TypesOfCasesService
{
    public function calculateTypesOfCases($firebaseData, $startDate, $endDate)
    {
        // Assuming $firebaseData is an array of data from Firebase

        // Filter data for the latest 30 days
        $filteredData = array_filter($firebaseData, function ($entry) use ($startDate, $endDate) {
            $entryDate = $entry['Date']; // Adjust this based on your actual data structure
            return $entryDate >= $startDate && $entryDate <= $endDate;
        });

        // Calculate total occurrences per unique type
        $typesOfCases = [];
        foreach ($filteredData as $entry) {
            $type = $entry['Type']; // Adjust this based on your actual data structure
            $typesOfCases[$type] = isset($typesOfCases[$type]) ? $typesOfCases[$type] + 1 : 1;
        }

        // Sort types in ascending order
        ksort($typesOfCases);

        // Prepare data for the bar chart
        $barChartData = [
            'labels' => array_keys($typesOfCases),
            'datasets' => [
                [
                    'label' => 'Total Occurrences',
                    'data' => array_values($typesOfCases),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];

        return $barChartData;
    }
}
