<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoahocsTable extends Migration
{
   
    public function up()
    {
        Schema::create('khoahocs', function (Blueprint $table) {
            $table->increments('makhoa');
            $table->integer('hocki');
            $table->string('namhoc');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('khoahocs');
    }
}
