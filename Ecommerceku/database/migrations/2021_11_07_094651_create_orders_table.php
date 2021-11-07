<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id',50);
            $table->integer('customer_id')->length(11);
            $table->string('name',255);
            $table->string('phone',50);
            $table->string('address',500);
            $table->string('kelurahan',255);
            $table->string('kecamatan',255);
            $table->string('kota',255);
            $table->string('provinsi',255);
            $table->string('kode_pos',10);
            $table->string('latitude',100);
            $table->string('longitude',100);
            $table->integer('agent_id')->length(11);
            $table->string('agent_name',255);
            $table->string('payment_method',255);
            $table->string('payment_link',255);
            $table->dateTime('payment_date',$precision = 0);
            $table->string('buy_by',100);
            $table->double('payment_total',8,2);
            $table->integer('coupon_id')->length(11);
            $table->string('payment_discount_code',255);
            $table->double('payment_discount',8,2);
            $table->double('payment_final',8,2);
            $table->float('order_weight',8,2);
            $table->float('order_distance',8,2);
            $table->integer('delivery_status')->length(11);
            $table->double('delivery_fee',8,2);
            $table->string('delivery_track',100);
            $table->string('delivery_date',50);
            $table->dateTime('order_time',$precision = 0);
            $table->string('status',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
