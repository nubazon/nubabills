<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('outcome_type')->index();
            $table->string('outcome_origin')->index();
            $table->string('income_gateway')->index();
            $table->string('income_where')->index();
            $table->float('ammount', 9, 2);
            $table->enum('status', array('confirmed' => 'Confirmado', 'canceled' => 'Cancelado', 'rejected' => 'Rechazado', 'pending' => 'Pendiente'))->index();
            $table->enum('is_partial', array('Y' => 'Si', 'N' => 'No'))->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function create()
    {
        Schema::table('transaction', function (Blueprint $table) {
            //
        });
    }
}
