<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateitunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itunes', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('title', 45)->nullable();
            $table->integer('episode_number')->nullable();
            $table->integer('season_number')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->boolean('block')->default(false);
            $table->timestamps();

            $table->primary('guid');

            // foreign key will need to be handled after all tables exist... this will be in a future migration.
            $table->foreign('guid')->references('guid')->on('episodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itunes');
    }
}
