<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('material_description');
            $table->string('material_group');
            $table->string('base_unit_of_measure');
            $table->double('unrestricted_use_stock', 20, 3)->default(0.000);
            $table->double('quality_inspection_stock', 20, 3)->default(0.000);
            $table->double('blocked_stock', 20, 3)->default(0.000);
            $table->double('in_transit_stock', 20, 3)->default(0.000);
            $table->double('valuation_class', 20, 3)->default(0.000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
