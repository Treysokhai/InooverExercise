<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersinforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersinfor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName',45);
            $table->string('lastName',45);
            $table->string('userName',45);
            $table->string('email',50);
            $table->string('password',500);
            $table->string('phoneNumber',50);
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
        Schema::dropIfExists('usersinfor');
    }
}
