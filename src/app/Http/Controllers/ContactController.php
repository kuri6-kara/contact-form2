<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
        // フォーム入力ページを表示　index.blade.phpをブラウザに表示
    }

    public function confirm(Request $request)
    // formタグから送られた値をRequestクラスで取り出す
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        // 実際に値を取り出す処理を記述する 値を取り出すためには、$request->only(['キー', 'キー']); と記述
        // 「キー」には、view ファイル内 inputタグ の name 属性で指定した文字を記述
        return view('confirm', ['contact' => $contact]);
        // view ファイルを呼び出す/入力情報が入った変数$contactを contact というキーで渡す
        // Blade ファイルでは、controller から渡された値を、「$キー名」という形で利用する
        // 作成した confirm アクションでは、 confirm.blade.php を呼ぶ際に、キーを contact として入力情報を渡している＝confirm.blade.php では、「 $contact」に入力内容が格納されていることになる
        // return view('confirm', compact('contact'));
        // 上記の記述をcompact 関数を使うと、以上のようにシンプルに記述できる

    }
}
