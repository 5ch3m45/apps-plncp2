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
            $table->unsignedBigInteger('pdp_card_id');
            $table->string('ref_doc_number')->unique();
            $table->string('reservation')->nullable();
            $table->string('cost_element')->nullable();
            $table->string('wbs_element')->nullable();
            $table->integer('period')->nullable();
            $table->date('posting_date')->nullable();
            $table->string('doc_header_text')->nullable();
            $table->string('unloading_point')->nullable();
            $table->timestamps();
            $table->foreign('pdp_card_id')->references('id')->on('pdp_cards');
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
