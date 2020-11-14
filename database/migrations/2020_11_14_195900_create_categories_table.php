<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('parent')->nullable();
            $table->string('programming', 45);
            $table->string('name', 45);
            $table->timestamps();

            $table->primary('guid');
            $table->foreign('parent')->references('guid')->on('categories');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `categories_BEFORE_INSERT` BEFORE INSERT ON `categories` FOR EACH ROW
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
        Schema::dropIfExists('categories');
    }
}
