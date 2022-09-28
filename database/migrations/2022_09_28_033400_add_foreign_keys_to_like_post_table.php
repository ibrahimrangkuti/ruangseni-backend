<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLikePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_post', function (Blueprint $table) {
            $table->foreign('post_id', 'fk_like_post_to_post')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'fk_like_post_to_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_post', function (Blueprint $table) {
            $table->dropForeign('fk_like_post_to_post');
            $table->dropForeign('fk_like_post_to_user');
        });
    }
}
