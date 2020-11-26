<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAssetMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_meta', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('key', 45);
            $table->string('value', 45);
            $table->timestamps();

            // foreign key will need to be handled after all tables exist... this will be in a future migration.
            $table->foreign('guid')->references('guid')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_meta');
    }
}
