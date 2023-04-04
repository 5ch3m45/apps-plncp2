<?php

namespace App\Imports;

use App\Models\Cj70;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelCj70 implements ToCollection
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
                $posting_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
                $data[] = [
                    'ref_doc_number' => $row[0],
                    'reservation' => $row[1],
                    'cost_element' => $row[2],
                    'period' => (int)$row[3],
                    'posting_date' => $posting_date,
                    'rem_val_cnt_cur' => $row[5],
                    'qty' => $row[6],
                    'doc_header_text' => $row[7],
                    'unloading_point' => $row[8],
                    'capitalized_auc' => $row[9],
                    'name' => $row[10],
                    'vendor' => $row[11],
                    'vendor_name' => $row[12],
                    'material' => $row[13],
                    'material_description' => $row[14],
                    'wbs_element' => $row[15],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }
        Cj70::insert($data);
    }
}
