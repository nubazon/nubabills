<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificationable', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->unsignedInteger('notificationable_id')->index();
            $table->unsignedInteger('notificationable_type')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notificationable', function (Blueprint $table) {
            //
        });
    }
}
