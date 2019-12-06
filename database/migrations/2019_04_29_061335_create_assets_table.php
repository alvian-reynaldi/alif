<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryid')->default(0);
            $table->string('assetcode',5)->nullable();
            $table->string('assetname',40)->nullable();
            $table->tinyInteger('satuan')->default(0);
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
        Schema::dropIfExists('assets');
    }
}
