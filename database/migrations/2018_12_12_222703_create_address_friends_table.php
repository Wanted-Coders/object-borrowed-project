<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressFriendsTable extends Migration
{
    
    public function up()
    {
        Schema::create('address_friends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('public_place',100);
            $table->string('neighborhood',70);
            $table->string('city',70);
            $table->char('state',2);
            $table->integer('number');
            $table->string('complement', 100);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('address_friends');
    }
}
