<?php

namespace App\Services\DSS\Warehouse;

class TotalTypesOfCasesService
{
    public function calculateTotalTypesOfCases($data)
    {
        $totalTypes = [];

        foreach ($data as $entry) {
            $type = $entry['Type'];

            // Count occurrences of each type
            $totalTypes[$type] = isset($totalTypes[$type]) ? $totalTypes[$type] + 1 : 1;
        }

        return $totalTypes;
    }
}
