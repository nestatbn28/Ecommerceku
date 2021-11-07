<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',255);
            $table->integer('category')->length(11);
            $table->string('type',255);
            $table->string('item',255);
            $table->double('weight',8,2);
            $table->string('sku',255);
            $table->double('price_sell',8,2);
            $table->double('price_promo',8,2);
            $table->double('price_agent',8,2);
            $table->string('photo',255);
            $table->string('recommendation',255);
            $table->text('description');
            $table->string('status',255);
            $table->integer('ordering')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
