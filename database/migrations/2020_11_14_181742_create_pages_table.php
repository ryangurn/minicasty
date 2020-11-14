<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('episode');
            $table->string('slug', 45);
            $table->string('title', 45);
            $table->boolean('display_podcast')->nullable();
            $table->boolean('display_episode')->nullable();
            $table->timestamps();

            $table->primary('guid');
            $table->foreign('episode')->references('guid')->on('episodes');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `pages_BEFORE_INSERT` BEFORE INSERT ON `pages` FOR EACH ROW
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
        Schema::dropIfExists('pages');
    }
}
