<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_trx');
            $table->date('tgl_refund');
            $table->string('invoice');
            $table->string('no_va');
            $table->string('sof');
            $table->float('amount');
            $table->integer('ca_code');
            $table->string('merchant_name');
            $table->string('status');
            $table->string('keterangan');
            $table->string('bank_receiver');
            $table->string('no_rek');
            $table->string('receiver');
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
        Schema::dropIfExists('refunds');
    }
}
