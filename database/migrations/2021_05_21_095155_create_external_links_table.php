<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_links', function (Blueprint $table) {
            $table->id();
            $table->string('ai');
            $table->string('ai_nepal');
            $table->string('ai_nepal_activities');
            $table->string('int_campaign');
            $table->string('campaign_materails');
            $table->string('appeal_for_action');
            $table->string('national_board');
            $table->string('publications');
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
        Schema::dropIfExists('external_links');
    }
}
