<?php

namespace App\Services\DSS\Present;

class TimeOfCasesService
{
    public function calculateTimeOfCases($firebaseData, $startDate, $endDate)
    {
        // Assuming $firebaseData is an array of data from Firebase

        // Filter data for the latest 30 days
        $filteredData = array_filter($firebaseData, function ($entry) use ($startDate, $endDate) {
            $entryDate = $entry['Date']; // Adjust this based on your actual data structure
            return $entryDate >= $startDate && $entryDate <= $endDate;
        });

        // Initialize an array to store occurrences for each hour
        $hourlyOccurrences = array_fill(7, 18, 0); // Change the range to include hours 7 to 12 (midnight)

        // Calculate total occurrences per hour
        foreach ($filteredData as $entry) {
            $entryTime = date('G', strtotime($entry['Time'])); // Extract the hour (24-hour format)
            if ($entryTime >= 7 && $entryTime <= 24) { // Update the condition to include up to midnight
                $hourlyOccurrences[$entryTime]++;
            }
        }

        // Prepare data for the line chart
        $lineChartData = [
            'labels' => range(7, 24), // Hours from 7 to 24 (midnight)
            'datasets' => [
                [
                    'label' => 'Total Occurrences',
                    'data' => array_values($hourlyOccurrences),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];

        return $lineChartData;
    }
}
