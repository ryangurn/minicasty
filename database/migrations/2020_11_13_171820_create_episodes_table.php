<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('title', 45);
            // foreign key (audio) on assets.guid
            $table->string('audio');
            $table->timestamp('publishing_date')->nullable();
            $table->string('description', 45);
            // foreign key (image) on assets.guid
            $table->string('image')->nullable();
            $table->boolean('explicit')->default(0);
            $table->timestamps();

            $table->primary('guid');
            // foreign key will need to be handled after all tables exist... this will be in a future migration.
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `episodes_BEFORE_INSERT` BEFORE INSERT ON `episodes` FOR EACH ROW
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
        Schema::dropIfExists('episodes');
    }
}
