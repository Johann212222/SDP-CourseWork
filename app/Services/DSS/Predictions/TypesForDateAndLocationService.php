<?php

namespace App\Services\DSS\Predictions;

class TypesForDateAndLocationService{

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

    public function predictCasesForDateAndLocation($selectedDate, $selectedLocation2, array $complaintData)
    {
        // For demonstration purposes, calculate a dummy intensity
        $time = strtotime($selectedDate);
        $intensity = $this->calculateIntensity($time);

        // Get unique types for the selected location
        $uniqueTypes = $this->getUniqueTypesForLocation($selectedLocation2, $complaintData);

        $predictions = [];

        // Predict cases for each type based on the intensity
        foreach ($uniqueTypes as $type) {
            $predictedCases = $intensity * mt_rand(1, 10); // Dummy prediction, replace with actual logic
            $predictions[$type] = round($predictedCases);
        }

        return $predictions;
    }

    private function getUniqueTypesForLocation($selectedLocation2, array $complaintData)
    {
        $types = [];

        foreach ($complaintData as $item) {
            if (isset($item['location']) && $item['location'] === $selectedLocation2 && isset($item['type'])) {
                $types[] = $item['type'];
            }
        }

        // Filter unique types
        $uniqueTypes = array_unique($types);

        return $uniqueTypes;
    }

}