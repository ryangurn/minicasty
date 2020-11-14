<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('page');
            $table->string('header', 45);
            $table->string('subtitle', 45)->nullable();
            $table->mediumText('content')->nullable();
            $table->timestamps();

            $table->primary('guid');
            $table->foreign('page')->references('guid')->on('pages');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `page_contents_BEFORE_INSERT` BEFORE INSERT ON `page_contents` FOR EACH ROW
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
        Schema::dropIfExists('page_contents');
    }
}
