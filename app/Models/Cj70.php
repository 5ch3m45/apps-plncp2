<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cj70 extends Model
{
    use HasFactory;

    protected $fillable = [
		'pdp_card_id',
        'ref_doc_number',
        'reservation',
    	'cost_element',
    	'wbs_element',
    	'period',
    	'posting_date',
    	'unloading_point',
    	'doc_header_text'
    ];

    public function kartu_pdp()
    {
        return $this->belongsTo(PdpCard::class, 'pdp_card_id');
    }

    public function materials()
    {
        return $this->hasMany(Cj70Material::class, 'cj70_id');
    }
}
