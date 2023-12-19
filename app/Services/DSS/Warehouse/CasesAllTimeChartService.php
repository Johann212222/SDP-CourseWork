<?php

// App\Services\DSS\Warehouse\CasesAllTimeChartService.php

namespace App\Services\DSS\Warehouse;

class CasesAllTimeChartService
{
    public function processChartData($firebaseData)
    {
        $chartData = [];

        foreach ($firebaseData as $entry) {
            $date = $entry['Date'];

            // Count occurrences of each date
            $chartData[$date] = isset($chartData[$date]) ? $chartData[$date] + 1 : 1;
        }

        ksort($chartData);

        // Prepare data for Chart.js
        $labels = array_keys($chartData);
        $data = array_values($chartData);
    
        // Calculate regression line
        $regressionData = $this->calculateRegressionLine(range(1, count($labels)), $data);
        $regressionLine = array_map(function ($x) use ($regressionData) {
            return $regressionData['slope'] * $x + $regressionData['intercept'];
        }, range(1, count($labels)));
    
        return [
            'labels' => $labels,
            'data'   => $data,
            'regressionLine' => $regressionLine,
        ];
    }

        // Add the following function to CasesAllTimeChartService.php
    public function calculateRegressionLine($x, $y)
    {
        $n = count($x);

        // Calculate mean of x and y
        $xMean = array_sum($x) / $n;
        $yMean = array_sum($y) / $n;

        // Calculate slope (m)
        $numerator = 0;
        $denominator = 0;

        for ($i = 0; $i < $n; $i++) {
            $numerator += ($x[$i] - $xMean) * ($y[$i] - $yMean);
            $denominator += pow($x[$i] - $xMean, 2);
        }

        $slope = $numerator / $denominator;

        // Calculate y-intercept (b)
        $intercept = $yMean - $slope * $xMean;

        return compact('slope', 'intercept');
    }

}

