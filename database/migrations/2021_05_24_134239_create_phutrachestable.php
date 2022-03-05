<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhutrachestable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phutraches', function (Blueprint $table) {
            $table->increments('maphutrach');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('malop')->on('lops')->onDelete('cascade');
            $table->integer('magv')->unsigned();
            $table->foreign('magv')->references('magv')->on('giaoviens')->onDelete('cascade');
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
        Schema::dropIfExists('phutraches');
    }
}
