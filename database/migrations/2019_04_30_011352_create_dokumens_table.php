<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryid')->default(0);
            $table->string('docno',40)->nullable();
            $table->string('docname',100)->nullable();
            $table->string('filename',100)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('owner')->default(0);
            $table->integer('viewed')->default(0);  
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
        Schema::dropIfExists('dokumens');
    }
}
