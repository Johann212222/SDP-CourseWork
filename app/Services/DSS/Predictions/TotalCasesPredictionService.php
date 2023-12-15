<?php

namespace App\Services\DSS\Predictions;

class TotalCasesPredictionService{

    public  function calculateIntensity($time)
    {
        $mean = 0.5;
        $amplitude = 0.2;
        $stdDev = 5 * 3600;

        $intensity = $mean + $amplitude * exp(-0.5 * pow(($time - 12 * 3600) / $stdDev, 2));

        return max(0, min(1, $intensity));
    }

    public  function simulateNHPP($complaintData, $simulationDays)
    {
        $predictionCounts = [];

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

            $predictionCounts[$date] = $predictions_for_date;
        }

        return $predictionCounts;
    }

    public  function linearRegression($data)
    {
        $regressionData = [];

        $n = count($data);
        $sumX = $sumY = $sumXY = $sumXSquare = 0;

        for ($i = 0; $i < $n; $i++) {
            $sumX += $i;
            $sumY += $data[$i];
            $sumXY += $i * $data[$i];
            $sumXSquare += $i * $i;
        }

        $slope = ($n * $sumXY - $sumX * $sumY) / ($n * $sumXSquare - $sumX * $sumX);
        $intercept = ($sumY - $slope * $sumX) / $n;

        for ($i = 0; $i < $n; $i++) {
            $regressionData[] = ['x' => $i, 'y' => $slope * $i + $intercept];
        }

        return $regressionData;
    }
    
    public  function calculateTheoreticalGraph($predictionCounts)
    {
        $theoreticalGraph = [];
        $totalCases = 0;

        foreach ($predictionCounts as $date => $count) {
            $totalCases += $count;
            $theoreticalGraph[$date] = $totalCases;
        }

        return $theoreticalGraph;
    }

    public  function calculateGrowthPercentage($theoreticalRegression, $nhppRegression)
    {
        $lastTheoreticalValue = end($theoreticalRegression)['y'];
        $lastNHPPValue = end($nhppRegression)['y'];

        // Avoid division by zero
        if ($lastTheoreticalValue == 0) {
            return 0;
        }

        $growthPercentage = (($lastNHPPValue - $lastTheoreticalValue) / $lastTheoreticalValue) * 100;

        return $growthPercentage;
    }

    
}