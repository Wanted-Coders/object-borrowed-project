<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('nickname',50);
            $table->string('email',120);
            $table->string('cell_phone',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
