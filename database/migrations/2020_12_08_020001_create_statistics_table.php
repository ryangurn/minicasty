<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('episode')->nullable();
            $table->string('page')->nullable();
            $table->integer('count')->default(0);
            $table->timestamps();

            $table->primary('guid');

            $table->foreign('episode')->references('guid')->on('episodes');
            $table->foreign('page')->references('guid')->on('pages');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `statistics_BEFORE_INSERT` BEFORE INSERT ON `statistics` FOR EACH ROW
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
        Schema::dropIfExists('statistics');
    }
}
