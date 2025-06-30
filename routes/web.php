<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\InquiryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test/func',[TestController::class,'func']);

//入力フォームページ
Route::get('/contact',[ContactsController::class,'index'])->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm',[ContactsController::class,'confirm'])->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks',[ContactsController::class,'send'])->name('contact.send');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('member');
Route::post('/logout',[App\Http\Controllers\LogoutController::class,'logout'])->name('logout');
Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
// Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');
// フォーム表示用
Route::get('/new_registration', [App\Http\Controllers\RegistrationController::class, 'new_registration'])->name('new_registration');
// フォーム送信処理用
Route::post('/new_registration', [App\Http\Controllers\RegistrationController::class, 'store'])->name('new_registration.store');
Route::get('/inquiry', [App\Http\Controllers\InquiryController::class, 'index'])->name('inquiry');


Route::resource('users', UserController::class);
// 編集
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
// 削除
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('/users/inquiry_edit', [InquiryController::class, 'index'])->name('users.index');
Route::get('/users/{user}/edit', [InquiryController::class, 'edit'])->name('users.inquiry_edit');
Route::put('/users/{id}', [InquiryController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [InquiryController::class, 'destroy'])->name('users.destroy');


