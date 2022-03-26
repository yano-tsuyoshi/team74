<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->comment('');
            $table->string('name')->length('20')->comment('コース名');
            $table->string('detail')->length('50')->comment('コース内容');
            $table->unsignedBigInteger('time')->comment('コース時間');
            $table->unsignedBigInteger('price')->comment('コース料金');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
