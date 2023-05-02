<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdpCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdp_cards', function (Blueprint $table) {
            $table->id();
            $table->string('spk_number')->unique();
            $table->date('spk_date')->nullable();
            $table->double('spk_value',20,3)->default(0);
            $table->string('vendor_name')->nullable();
            $table->string('work')->nullable();
            $table->string('bastp_number')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->boolean('is_arsip')->default(false);
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
        Schema::dropIfExists('pdp_cards');
    }
}
