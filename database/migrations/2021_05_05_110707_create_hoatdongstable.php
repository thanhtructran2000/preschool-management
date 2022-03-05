<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoatdongstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoatdongs', function (Blueprint $table) {
                $table->increments('mahoatdong');
                $table->string('tieude');
                $table->string('nguoidang',50);
                $table->date('ngaydang');
                $table->longText('noidung');
                $table->string('image');
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
        Schema::dropIfExists('hoatdongs');
    }
}
