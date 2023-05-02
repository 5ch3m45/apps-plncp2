<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCj70MaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cj70_materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cj70_id')->nullable();
            $table->unsignedBigInteger('material_id')->nullable();
            $table->string('master_asset')->nullable();
            $table->string('substation')->nullable();
            $table->string('address')->nullable();
            $table->string('feeder')->nullable();
            $table->string('name')->nullable();
            $table->string('vendor')->nullable();
            $table->string('vendor_name')->nullable();
            $table->integer('qty');
            $table->double('rem_val_cnt_cur',20,3)->default(0);
            $table->double('capitalized_auc',20,3)->default(0);
            $table->double('job_value',20,3)->default(0);
            $table->double('overhead_value',20,3)->default(0);
            $table->timestamps();
            $table->foreign('cj70_id')->references('id')->on('cj70s');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cj70_materials');
    }
}
