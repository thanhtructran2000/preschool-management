<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhancongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancongs', function (Blueprint $table) {
            $table->increments('maphancong');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('malop')->on('lops')->onDelete('cascade');
            $table->integer('mamonhoc')->unsigned();
            $table->foreign('mamonhoc')->references('mamonhoc')->on('monhocs')->onDelete('cascade');
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
        Schema::dropIfExists('phancongs');
    }
}
