<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
   public function index()
   { 
    // 入力ページを表示
    return view('contact.index');
   }



    public function confirm(Request $request)
    {
        //バリデーションルールを定義
        //引っかかるとエラーを起こしてくれる
        $request -> validate([
        'email' =>  'required|email', 
        'title' =>  'required',
        'body' =>  'required',
        ]);

        //フォームからの入力値を全て取得
        $inputs = $request->all();

        //確認ページに表示
        //入力値を引数に渡す
        return view('contact.confirm',[
        'inputs' => $inputs,
        ]);
    }
}