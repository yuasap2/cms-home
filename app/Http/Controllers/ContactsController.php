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



    public function confirm (Request $request)
    {
        //バリデーションルールを定義
        //引っかかるとエラーを起こしてくれる
        $request  -> validate ([
        'company' => 'required|max:20',
        'name' => 'required|max:20',
        'telephone' => 'required|regex:/^[0-9-]+$/',
        'email' =>  'required|email', 
        'date' => 'required|date',
        'gender' => 'required',
        'job' => 'required',
        'body' =>  'required',
        ],
        ['company.required' => '会社名は必須です。',
         'company.max' => '会社名は :max文字以内でお願いします。',
         'name.required' => '氏名は必須です。',
         'name.max' => '氏名は :max文字以内でお願いします。',
         'telephone.required' => '電話番号は必須です',
         'telephone.regex' => '電話番号は半角数字とハイフンで入力してください。',
         'email.required' => 'メールアドレスは必須です。',
         'date.required' =>'生年月日は必須です。',
         'gender.required' =>'性別は必須です。',
         'job.required' =>'職業は必須です。',
         'body.required' =>'お問い合わせ内容は必須です。',

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
            'company' => 'required|max:20',
            'name' => 'required|max:20',
            'telephone' => 'required|regex:/^[0-9-]+$/',
            'email' =>  'required|email',
            'date' => 'required|date',
            'gender' => 'required',
            'job' => 'required',
            'body'  =>  'required',
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
            // //入力されたメールアドレスにメールを送信
            // \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));

            // // 自分にメールを送信
            // \Mail::to('mongaifushutsu0423@gmail.com')->send(new ContactsSendmail($inputs));

            // 再送信を防ぐためにトークンを再配行
            // $request->session()->regenerateToken();

            $inputs = $request->all();

            //送信完了ページのviewを表示
            return view('contact.thanks',[
            'inputs' => $inputs,
            ]);
        }
    
    }

   
}