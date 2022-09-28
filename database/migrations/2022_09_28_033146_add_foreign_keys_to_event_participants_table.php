<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_participants', function (Blueprint $table) {
            $table->foreign('event_id', 'fk_event_participant_to_event')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_id', 'fk_event_participant_to_post')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_participants', function (Blueprint $table) {
            $table->dropForeign('fk_event_participant_to_event');
            $table->dropForeign('fk_event_participant_to_post');
        });
    }
}
