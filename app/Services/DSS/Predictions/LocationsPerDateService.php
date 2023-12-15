<?php

namespace App\Services\DSS\Predictions;

class LocationsPerDateService{

    public  function calculateIntensity($time)
    {
        $mean = 0.5;
        $amplitude = 0.2;
        $stdDev = 5 * 3600;

        $intensity = $mean + $amplitude * exp(-0.5 * pow(($time - 12 * 3600) / $stdDev, 2));

        return max(0, min(1, $intensity));
    }

    public function simulateEvents($selectedDate, $complaint_data, &$data)
    {
        $start_time = strtotime($selectedDate . " 07:00:00");
        $end_time = strtotime($selectedDate . " 23:59:59");

        $current_time = $start_time;
        $predictionsHTML = '';
        $locationCounts = [];

        while ($current_time < $end_time) {
            $intensity = $this->calculateIntensity($current_time);

            $rand = rand(0, 100) / 100.0;

            if ($rand < $intensity) {
                $this->handleEvent($current_time, $complaint_data, $selectedDate, $locationCounts, $predictionsHTML, $data);
            }

            $current_time += rand(1800, 7200);
        }

        // Generate pie chart data
        $chartLabels = array_keys($locationCounts);
        $chartData = array_values($locationCounts);
        $this->setData($chartLabels, $chartData, $data);

        return $predictionsHTML;
    }
    
    public function handleEvent($current_time, $complaint_data, $selectedDate, &$locationCounts, &$predictionsHTML, &$data)
    {
        if (!empty($complaint_data)) {
            $random_complaint = $complaint_data[array_rand($complaint_data)];

            if (date('H:i', $current_time) >= '07:00' && date('H:i', $current_time) <= '23:59') {
                $predictionsHTML .= "<p>On $selectedDate at " . date('H:i', $current_time) . ", a Type {$random_complaint['Type']} complaint was predicted at {$random_complaint['location']}.</p>";

                $location = $random_complaint['location'];
                $this->updateLocationCount($location, $locationCounts);
            }
        } else {
            $predictionsHTML .= "<p>No complaint data available for prediction.</p>";
        }
    }

    public function updateLocationCount($location, &$locationCounts)
    {
        if (!isset($locationCounts[$location])) {
            $locationCounts[$location] = 1;
        } else {
            $locationCounts[$location]++;
        }
    }

    public function setData($chartLabels, $chartData, &$data)
    {
        $data['chartLabels'] = $chartLabels;
        $data['chartData'] = $chartData;
    }
}