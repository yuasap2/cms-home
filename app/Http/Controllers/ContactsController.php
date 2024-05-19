<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactsSendmail;

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

    public function send(Request $request)
    {
        //バリデーションを実行（結果に問題が起これば処理を中断してエラーを返す）
        $request->validate([
            'email' =>  'required|email',
            'title' =>  'required',
            'body'  =>  'required'
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !=='submit'){
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);
       
        } else {
            //入力されたメールアドレスにメールを送信
            \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));

            //再送信を防ぐためにトークンを再配行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('contact.thanks');
        }
    }
}