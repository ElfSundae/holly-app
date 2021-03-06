<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('device_apps')) {
            return;
        }

        Schema::create('device_apps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('device_id');
            $table->string('identifier', 40);
            $table->string('version', 20);
            $table->string('channel', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_apps');
    }
}
