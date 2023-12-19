<?php

namespace App\Services\DSS\Present;

class TotalCasesInChartService
{
    public function generateLineChartData($dateOccurrences)
    {
        // Sort dates in ascending order
        ksort($dateOccurrences);
    
        $labels = [];
        $data = [];
    
        foreach ($dateOccurrences as $date => $occurrences) {
            $labels[] = $date;
            $data[] = $occurrences;
        }
    
        // Calculate regression line parameters
        $regressionLine = $this->calculateLinearRegression($data);
    
        $chartData = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Total Cases',
                    'data' => $data,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'fill' => false,
                ],
                [
                    'label' => 'Regression Line',
                    'data' => $regressionLine,
                    'backgroundColor' => 'rgba(255, 0, 0, 0.2)',
                    'borderColor' => 'rgba(255, 0, 0, 1)',
                    'borderWidth' => 1,
                    'fill' => false,
                ],
            ],
        ];
    
        return json_encode($chartData);
    }
    
    private function calculateLinearRegression($data)
    {
        $n = count($data);
        $sumX = $sumY = $sumXY = $sumXSquare = 0;

        for ($i = 0; $i < $n; $i++) {
            $sumX += $i + 1;
            $sumY += $data[$i];
            $sumXY += ($i + 1) * $data[$i];
            $sumXSquare += pow($i + 1, 2);
        }

        $slope = ($n * $sumXY - $sumX * $sumY) / ($n * $sumXSquare - pow($sumX, 2));
        $intercept = ($sumY - $slope * $sumX) / $n;

        $regressionLine = [];

        for ($i = 0; $i < $n; $i++) {
            $regressionLine[] = $slope * ($i + 1) + $intercept;
        }

        return $regressionLine;
    }

}
