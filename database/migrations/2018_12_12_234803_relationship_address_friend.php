<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAddressFriend extends Migration
{

    public function up()
    {
        Schema::table('address_friends', function (Blueprint $table) {
            $table->integer('friend_id')->unsigned();
            $table->foreign('friend_id')->references('id')->on('friends');
        });
    }

    public function down()
    {
        Schema::table('object_borroweds', function (Blueprint $table) {
            $table->dropForeign('friends_friend_id_foreign');
            $table->dropColumn('friend_id');
        });
    }
}
