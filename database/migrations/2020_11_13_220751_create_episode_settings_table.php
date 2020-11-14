<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_settings', function (Blueprint $table) {
            $table->string('episode');
            $table->string('setting');
            $table->timestamps();

            $table->primary(['episode', 'setting']);

            $table->foreign('episode')->references('guid')->on('episodes');
            $table->foreign('setting')->references('guid')->on('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_settings');
    }
}
