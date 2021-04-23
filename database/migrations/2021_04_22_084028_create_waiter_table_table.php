<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaiterTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiter_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waiter_id');
            $table->unsignedBigInteger('table_id');
            $table->foreign('waiter_id')->references('id')->on('waiters');
            $table->foreign('table_id')->references('id')->on('tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waiter_table');
    }
}
