<?php

namespace App\Services\DSS\Predictions;

class TotalCasesPerDateForLocationService{

    public  function calculateIntensity($time)
    {
        $mean = 0.5;
        $amplitude = 0.2;
        $stdDev = 5 * 3600;

        $intensity = $mean + $amplitude * exp(-0.5 * pow(($time - 12 * 3600) / $stdDev, 2));

        return max(0, min(1, $intensity));
    }

    public function getUniqueLocations(array $firebaseData)
    {
        $locations = [];
    
        foreach ($firebaseData as $item) {
            if (isset($item['location'])) {
                $locations[] = $item['location'];
            }
        }
    
        // Filter unique locations
        $uniqueLocations = array_unique($locations);
    
        return $uniqueLocations;
    }

    public function getTotalPredictionsForLocation($selectedLocation, $simulationDays)
    {
        $locationPredictions = [];

        for ($day = 1; $day <= $simulationDays; $day++) {
            $date = date('Y-m-d', strtotime("+$day days"));
            $start_time = strtotime($date . " 07:00:00");
            $end_time = strtotime($date . " 23:59:59");

            $current_time = $start_time;
            $predictions_for_date = 0;

            while ($current_time < $end_time) {
                $intensity = $this->calculateIntensity($current_time);
                $rand = rand(0, 100) / 100.0;

                if ($rand < $intensity) {
                    if (date('H:i', $current_time) >= '07:00' && date('H:i', $current_time) <= '23:59') {
                        $predictions_for_date++;
                    }
                }

                $current_time += rand(1800, 7200);
            }

            $locationPredictions[$date] = $predictions_for_date;
        }

        // Store the location-specific predictions in the session
        session()->set('locationPredictions', $locationPredictions);

        return $locationPredictions;
    }
    

}