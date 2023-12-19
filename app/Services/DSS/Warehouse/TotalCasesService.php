<?php

namespace App\Services\DSS\Warehouse;

class TotalCasesService
{
    public function calculateTotalCases($data)
    {
        return count($data);
    }
}
