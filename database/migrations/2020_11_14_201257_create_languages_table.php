<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('name', 45);
            $table->string('3_digit', 3);
            $table->string('2_digit', 2)->nullable();
            $table->timestamps();

            $table->primary('guid');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `languages_BEFORE_INSERT` BEFORE INSERT ON `languages` FOR EACH ROW
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
        Schema::dropIfExists('languages');
    }
}
