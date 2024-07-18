<?php

// use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\TestController;

use App\Http\Controllers\ContactsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/func',[TestController::class,'func']);

//入力フォームページ
Route::get('/contact',[ContactsController::class,'index'])->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm',[ContactsController::class,'confirm'])->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks',[ContactsController::class,'send'])->name('contact.send');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
