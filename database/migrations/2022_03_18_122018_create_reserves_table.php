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
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->unsignedBigInteger('staff_id')->comment('スタッフID');
            $table->unsignedBigInteger('course_id')->comment('コースID');
            $table->string('name')->comment('予約者名');
            $table->date('date')->comment('予約日');
            $table->time('time')->comment('予約時間');            
            $table->string('course')->comment('コース名');
            $table->string('staff')->comment('担当スタッフ');
            $table->text('detail')->nullable()->comment('メモ');
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
        Schema::dropIfExists('reserves');
    }
};
