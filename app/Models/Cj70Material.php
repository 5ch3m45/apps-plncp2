<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cj70Material extends Model
{
    use HasFactory;

    protected $fillable = [
		'cj70_id',
    	'material_id',
        'master_asset',
        'substation',
        'address',
        'feeder',
    	'name',
    	'vendor',
    	'vendor_name',
    	'qty',
    	'rem_val_cnt_cur',
    	'capitalized_auc',
        'job_value',
        'overhead_value',
    ];

    public function cj70()
    {
        return $this->belongsTo(Cj70::class, 'cj70_id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}
