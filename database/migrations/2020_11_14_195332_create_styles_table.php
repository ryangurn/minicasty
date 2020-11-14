<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('name', 45);
            $table->string('class', 45);
            $table->text('usable');
            $table->timestamps();

            $table->primary('guid');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `styles_BEFORE_INSERT` BEFORE INSERT ON `styles` FOR EACH ROW
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
        Schema::dropIfExists('styles');
    }
}
