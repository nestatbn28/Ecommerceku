<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('email',255);
            $table->dateTime('email_verified_at',$precision = 0);
            $table->string('password',255);
            $table->string('pin',255);
            $table->string('phone',255);
            $table->dateTime('phone_verified_at',$precision = 0);
            $table->integer('account_type')->length(11);
            $table->string('account_role',255);
            $table->string('photo',255);
            $table->dateTime('last_login',255);
            $table->dateTime('created_at',255);
            $table->dateTime('updated_at',255);
            $table->string('remember_token',500);
            $table->string('password_reset_code',255);
            $table->string('device_token',255);
            $table->string('account_status',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
