<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// useでコントローラーを読み込む

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index']);
// /にgetメソッドでアクセス→ContactControllerのindexアクションを呼び出す

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
// 送信ボタン押す→confirmアクション実行

Route::post('/contacts', [ContactController::class, 'store']);
// 入力内容確認画面で送信ボタンを押す→入力内容をコントローラーで受け取る

