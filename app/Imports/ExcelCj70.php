<?php

namespace App\Imports;

use App\Models\Cj70;
use App\Models\PdpCard;
use App\Models\Material;
use App\Models\Cj70Material;
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
                $kartu_pdp = PdpCard::select('id')->where('spk_number',$row[7])->first();
                if(!$kartu_pdp){
                    $kartu_pdp = PdpCard::create([
                        'spk_number' => $row[7]
                    ]);
                }
                $material_id = NULL;
                $material = Material::select('id')->where('code',$row[14])->first();
                if($material){
                    $material_id = $material->id;
                }
                $cj70 = Cj70::select('id')->where('ref_doc_number',$row[0])->first();
                if(!$cj70){
                    $cj70 = Cj70::create([
                        'pdp_card_id' => $kartu_pdp->id,
                        'ref_doc_number' => $row[0],
                        'reservation' => $row[1],
                        'cost_element' => $row[2],
                        'wbs_element' => $row[15],
                        'period' => (int)$row[3],
                        'posting_date' => $posting_date,
                        'doc_header_text' => $row[7],
                        'unloading_point' => $row[8],
                        'updated_at' => now(),
                        'created_at' => now()
                    ]);
                }
                $cj70Material = Cj70Material::select('id')->where(['cj70_id'=>$cj70->id,'material_id'=>$material_id])->first();
                if(!$cj70Material){
                    Cj70Material::create([
                        'cj70_id' => $cj70->id,
                        'material_id' => $material_id,
                        'name' => $row[10],
                        'vendor' => $row[11],
                        'vendor_name' => $row[12],
                        'qty' => $row[6],
                        'rem_val_cnt_cur' => $row[5],
                        'capitalized_auc' => $row[9],
                        'updated_at' => now(),
                        'created_at' => now()
                    ]);
                }
            }
        }
    }
}
