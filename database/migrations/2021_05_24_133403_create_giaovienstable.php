<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaovienstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaoviens', function (Blueprint $table) {
            $table->increments('magv');
            $table->string('hotengv',30);
            $table->date('ngaysinhgv');
            $table->string('gioitinhgv',10);
            $table->string('trinhdogv');
            $table->string('diachigv');
            $table->string('sdt',12);
            $table->string('email',50);
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
        Schema::dropIfExists('giaoviens');
    }
}
