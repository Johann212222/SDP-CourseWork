<?php

namespace App\Services\DSS\Present;

class TotalOccurencesService
{
    public function calculateTotalOccurrences($firebaseData, $thirtyDaysAgo, $currentDate)
    {
        $dateOccurrences = [];

        foreach ($firebaseData as $entry) {
            $date = $entry['Date'];

            if (strtotime($date) >= strtotime($thirtyDaysAgo) && strtotime($date) <= strtotime($currentDate)) {
                if (isset($dateOccurrences[$date])) {
                    $dateOccurrences[$date]++;
                } else {
                    $dateOccurrences[$date] = 1;
                }
            }
        }

        return [
            'dateOccurrences' => $dateOccurrences,
            'totalOccurrences' => array_sum($dateOccurrences),
        ];
    }
}
