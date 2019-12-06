<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKebutuhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidn
     */
    public function up()
    {
        Schema::create('kebutuhans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assetid')->default(0);
            $table->integer('jumlah')->default(0);
            $table->integer('pengentri')->default(0);     
            $table->timestamp('waktuinput')->nullable();       
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
        Schema::dropIfExists('kebutuhans');
    }
}
