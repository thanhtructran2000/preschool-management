<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinhs', function (Blueprint $table) {
            $table->increments('mahs');
            $table->string('hotenhs',30);
            $table->string('diachihs');
            $table->date('ngaysinhhs');
            $table->string('gioitinhhs',10);
            $table->string('chieucao');
            $table->string('cannang');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('malop')->on('lops')->onDelete('cascade');
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
        Schema::dropIfExists('hocsinhs');
    }
}
