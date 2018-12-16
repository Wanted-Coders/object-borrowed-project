<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectBorrowedsTable extends Migration
{
    
    public function up()
    {
        Schema::create('object_borroweds', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('init_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('object_borroweds');
    }
}
