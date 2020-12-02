<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
//            $table->string('rel')->nullable();
            $table->boolean('image');
            $table->boolean('audio');
            $table->string('path', 45);
            $table->boolean('accessible')->default(1);
            $table->timestamps();
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `assets_BEFORE_INSERT` BEFORE INSERT ON `assets` FOR EACH ROW
        BEGIN
            SET NEW.guid = UUID();
        END
        ");
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
