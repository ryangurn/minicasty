<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->boolean('image');
            $table->boolean('audio');
            $table->string('path', 45);
            $table->boolean('accessible')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('assets');
    }
}
