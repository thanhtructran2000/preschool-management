<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuhuynhstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuhuynhs', function (Blueprint $table) {
            $table->increments('maph');
            $table->string('hotenph',30);
            $table->string('gioitinhph',10);
            $table->string('diachiph');
            $table->string('sdt');
            $table->string('email');
            $table->integer('mahs')->unsigned();
            $table->foreign('mahs')->references('mahs')->on('hocsinhs')->onDelete('cascade');
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
        Schema::dropIfExists('phuhuynhs');
    }
}
