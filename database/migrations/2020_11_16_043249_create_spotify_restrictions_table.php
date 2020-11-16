<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotifyRestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spotify', function(Blueprint $table) {
           $table->dropColumn('restriction');
        });

        Schema::create('spotify_restrictions', function (Blueprint $table) {
            $table->string('spotify');
            $table->string('country');
            $table->timestamps();

            $table->primary(['spotify', 'country']);
            $table->foreign('spotify')->references('guid')->on('spotify');
            $table->foreign('country')->references('guid')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spotify', function(Blueprint $table) {
           $table->mediumText('restriction')->nullable();
        });
        Schema::dropIfExists('spotify_restrictions');
    }
}
