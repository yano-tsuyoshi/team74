<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->length('50')->comment('名前');
            $table->date('birthday')->comment('生年月日');
            $table->string('address')->length('128')->comment('住所');
            $table->unsignedBigInteger('tel')->comment('電話番号');
            $table->string('email')->length('50')->comment('メールアドレス');
            $table->string('password')->length('50')->comment('パスワード');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
