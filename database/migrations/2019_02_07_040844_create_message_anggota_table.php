<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageAnggotaTable extends Migration
{
    public function up()
    {
        Schema::create('message_anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->text('messages');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('message_anggota');
    }
}
