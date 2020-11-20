<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('guid')->unique();
            $table->string('key', 45);
            $table->longText('value')->nullable();
            $table->timestamps();

            $table->primary('guid');
        });

        DB::unprepared("
        CREATE DEFINER = CURRENT_USER TRIGGER `settings_BEFORE_INSERT` BEFORE INSERT ON `settings` FOR EACH ROW
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
        Schema::dropIfExists('settings');
    }
}
