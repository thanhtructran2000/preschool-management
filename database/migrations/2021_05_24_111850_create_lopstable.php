<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lops', function (Blueprint $table) {
            $table->increments('malop');
            $table->string('tenlop',30);
            $table->integer('siso');
            $table->integer('makhoa')->unsigned();
            $table->foreign('makhoa')->references('makhoa')->on('khoahocs')->onDelete('cascade');
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
        Schema::dropIfExists('lops');
    }
}
