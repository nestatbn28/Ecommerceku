<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('store_name',255);
            $table->string('partner_id',50);
            $table->string('pin_lock',8);
            $table->time('store_open',$precision = 0);
            $table->time('store_close',$precision = 0);
            $table->string('address',500);
            $table->string('kelurahan',255);
            $table->string('kecamatan',255);
            $table->string('kota',255);
            $table->string('provinsi',255);
            $table->string('kode_pos',10);
            $table->string('latitude',100);
            $table->string('longitude',100);
            $table->string('ktp',255);
            $table->string('kk',255);
            $table->string('npwp',255);
            $table->string('no_rekening',255);
            $table->string('buku_rekening',355);
            $table->integer('point')->length(11);
            $table->double('credit_limit',8,2);
            $table->string('subscription',255);
            $table->integer('max_load')->length(11);
            $table->integer('default_agent')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
