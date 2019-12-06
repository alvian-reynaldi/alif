<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assetid')->default(0);
            $table->integer('branchid')->default(0);
            $table->integer('jumlah')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->integer('pengentri')->default(0);
            $table->timestamp('waktuentri')->nullable();
            $table->integer('endorser')->default(0);
            $table->timestamp('waktuendorse')->nullable();
            $table->string('endorsenote',200)->nullable();
            $table->integer('approver')->default(0);
            $table->timestamp('waktuapprove')->nullable(); 
            $table->string('catatan',200)->nullable();
            $table->string('fileusulan',50)->nullable();        
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
        Schema::dropIfExists('inventory_orders');
    }
}
