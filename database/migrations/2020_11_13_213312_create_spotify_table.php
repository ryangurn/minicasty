<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spotify', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->mediumText('restriction')->nullable();
            $table->integer('order')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->text('keywords')->nullable();
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
        Schema::dropIfExists('spotify');
    }
}
