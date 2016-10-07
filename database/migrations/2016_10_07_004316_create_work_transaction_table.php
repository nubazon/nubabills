<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('work_id');
            $table->unsignedInteger('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_transaction', function (Blueprint $table) {
            //
        });
    }
}
