<?php
// データベースの保存をするため、マイグレーションファイルでテーブルをまず作成
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // string=文字数制限が255文字以内の場合
            $table->string('email');
            $table->string('tel', 11);
            $table->text('content')->nullable();
            // text=文字数制限16384文字以内
            // nullable＝データベースのそのカラムには値が設定されない可能性がある
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
        Schema::dropIfExists('contacts');
    }
}
