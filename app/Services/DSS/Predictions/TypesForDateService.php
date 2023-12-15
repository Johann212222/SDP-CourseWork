<?php

namespace App\Services\DSS\Predictions;

class TypesForDateService{
    
    public function predictCasesForDate($selectedDate, $complaintData)
    {

        // Initialize counts for each complaint type
        $complaintTypeCounts = [
            '1' => 0,
            '2' => 0,
            '3' => 0,
            '4' => 0,
            '5' => 0,
        ];

        // Simulate events based on NHPP intensity for the selected date
        $start_time = strtotime($selectedDate . " 07:00:00");
        $end_time = strtotime($selectedDate . " 23:59:59");

        $current_time = $start_time;

        while ($current_time < $end_time) {
            // Calculate NHPP intensity at the current time
            $intensity = $this->calculateIntensity($current_time);

            // Event occurs
            $rand = rand(0, 100) / 100.0;

            if ($rand < $intensity) {
                // Check if complaint data is available
                if (!empty($complaintData)) {
                    // Select a random complaint details from the database
                    $random_complaint = $complaintData[array_rand($complaintData)];

                    // Increment the count for the complaint type
                    $complaintType = $random_complaint['Type'];
                    if (isset($complaintTypeCounts[$complaintType])) {
                        $complaintTypeCounts[$complaintType]++;
                    }
                }
            }

            // Move to the next time step
            $current_time += rand(1800, 7200); // Random time interval between 30 minutes and 2 hours
        }

        return $complaintTypeCounts;
    }

    public function calculateIntensity($time)
    {
        // Adjust this function based on your NHPP model
        $mean = 0.5; // Mean intensity
        $amplitude = 0.2; // Amplitude of the Gaussian function
        $stdDev = 5 * 3600; // Standard deviation (5 hours in seconds)

        // Gaussian function for intensity
        $intensity = $mean + $amplitude * exp(-0.5 * pow(($time - 12 * 3600) / $stdDev, 2));

        return max(0, min(1, $intensity)); // Ensure intensity is between 0 and 1
    }
}