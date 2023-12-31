<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddress4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address4s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // $table->foreignId('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id')->references('id')->on('users');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address4s');
    }
}
