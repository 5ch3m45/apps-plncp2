<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cj70 extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_doc_number',
        'reservation',
    	'cost_element',
    	'period',
    	'posting_date',
    	'rem_val_cnt_cur',
    	'qty',
    	'doc_header_text',
    	'unloading_point',
    	'capitalized_auc',
    	'name',
    	'vendor',
    	'vendor_name',
    	'material',
    	'material_description',
    	'wbs_element'
    ];
}
