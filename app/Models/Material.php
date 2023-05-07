<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'material_description',
        'material_group',
        'base_unit_of_measure',
        'unrestricted_use_stock',
        'quality_inspection_stock',
        'blocked_stock',
        'in_transit_stock',
        'valuation_class',
    ];
}
