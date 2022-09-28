<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->nullable()->index('fk_vote_post_to_post');
            $table->foreignId('user_id')->nullable()->index('fk_vote_post_to_user');
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
        Schema::dropIfExists('vote_post');
    }
}
