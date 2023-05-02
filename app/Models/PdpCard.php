<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdpCard extends Model
{
    use HasFactory;
    
    protected $fillable = [
		'spk_number',
        'spk_date',
        'spk_value',
    	'vendor_name',
    	'work',
    	'bastp_number',
    	'contract_start_date',
    	'contract_end_date',
    	'is_arsip'
    ];

    public function cj70()
    {
        return $this->hasMany(Cj70::class, 'pdp_card_id');
    }
}
