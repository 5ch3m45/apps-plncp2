<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCj70sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cj70s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_doc_number');
            $table->string('reservation');
            $table->string('cost_element');
            $table->integer('period');
            $table->date('posting_date');
            $table->bigInteger('rem_val_cnt_cur');
            $table->integer('qty');
            $table->string('doc_header_text');
            $table->string('unloading_point');
            $table->bigInteger('capitalized_auc');
            $table->string('name');
            $table->string('vendor')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('material')->nullable();
            $table->string('material_description')->nullable();
            $table->string('wbs_element');
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
        Schema::dropIfExists('cj70s');
    }
}
