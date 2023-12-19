<?php

namespace App\Services\DSS\Present;

class GrowthRateService
{
    public function calculateGrowthRate($totalOccurrences, $oldest30DaysTotalOccurrences)
    {
        return ($totalOccurrences - $oldest30DaysTotalOccurrences) / $oldest30DaysTotalOccurrences * 100;
    }
}
