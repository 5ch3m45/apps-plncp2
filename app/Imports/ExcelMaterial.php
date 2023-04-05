<?php

namespace App\Imports;

use App\Models\Material;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelMaterial implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $data = [];
        foreach ($collection as $key => $row) 
        {
            if($key > 0 && $row[0]){
                $data[] = [
                    'code' => $row[8],
                    'material_description' => $row[9],
                    'material_group' => $row[10],
                    'base_unit_of_measure' => $row[11],
                    'unrestricted_use_stock' => $row[13],
                    'quality_inspection_stock' => $row[14],
                    'blocked_stock' => $row[15],
                    'in_transit_stock' => $row[16],
                    'valuation_class' => $row[17],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }
        Material::insert($data);
    }
}
