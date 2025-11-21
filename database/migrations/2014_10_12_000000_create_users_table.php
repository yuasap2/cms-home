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
            // 会員名　必須　最大30文字
            $table->string('name',30);
            // フリガナ　必須　最大30文字
            $table->string('furigana',30);
            // メールアドレス　必須 文字列 email 重複なし
            $table->string('email')->unique();
            // メールアドレス確認用
            $table->timestamp('email_verified_at')->nullable();
            // パスワード 必須 文字列 8文字以上 ※入力した文字は見えないようにする
            $table->string('password');
            // 電話番号　必須　ハイフンなし半角数字
            $table->string('phone_number', 15);
            // 郵便番号　必須　ハイフンなし半角数字
            $table->string('postal_code', 7);
            // 都道府県 必須 
            $table->string('prefecture');
            // 市区町村 必須 最大30文字
            $table->string('city', 30);
            // 番号・アパート名 必須 最大50文字
            $table->string('address', 50)->nullable();
            // 備考欄 最大255文字
            $table->string('remarks', 255)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

}
