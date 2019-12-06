<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assetid')->default(0);
            $table->integer('branchid')->default(0);
            $table->integer('jumlah')->default(0);
            $table->integer('jumlahmin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_stocks');
    }
}
