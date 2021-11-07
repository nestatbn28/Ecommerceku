<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('referral_id')->length(11);
            $table->string('address',500);
            $table->string('kelurahan',255);
            $table->string('kecamatan',255);
            $table->string('kota',255);
            $table->string('provinsi',255);
            $table->string('kode_pos',10);
            $table->string('latitude',100);
            $table->string('longitude',100);
            $table->string('no_rekening',255);
            $table->string('buku_rekening',355);
            $table->integer('point')->length(11);
            $table->integer('default_address')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
