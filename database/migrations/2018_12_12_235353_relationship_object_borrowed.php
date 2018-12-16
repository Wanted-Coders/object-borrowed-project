<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipObjectBorrowed extends Migration
{

    public function up()
    {
        Schema::table('object_borroweds', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('friend_id')->unsigned();
            $table->foreign('friend_id')->references('id')->on('friends');
            $table->integer('object_id')->unsigned();
            $table->foreign('object_id')->references('id')->on('objects');
        });
    }

    public function down()
    {
        Schema::table('object_borroweds', function (Blueprint $table) {
            $table->dropForeign('users_user_id_foreign');
            $table->dropColumn('user_id');
            $table->dropForeign('friends_friend_id_foreign');
            $table->dropColumn('friend_id');
            $table->dropForeign('object_object_id_foreign');
            $table->dropColumn('object_id');
        });
    }
}
