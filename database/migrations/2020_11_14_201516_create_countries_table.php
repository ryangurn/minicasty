<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('name', 45);
            $table->string('2_digit', 2)->nullable();
            $table->string('3_digit', 3)->nullable();
            $table->timestamps();

            $table->primary('guid');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `countries_BEFORE_INSERT` BEFORE INSERT ON `countries` FOR EACH ROW
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
        Schema::dropIfExists('countries');
    }
}
