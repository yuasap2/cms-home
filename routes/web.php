<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
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
Route::get('/contact','ContactsController@index')->name('contact.index');
//確認フォームページ
Route::post('/contact/confrim','ContactsContraller@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks','CotactController@send')->name('contact.send');

