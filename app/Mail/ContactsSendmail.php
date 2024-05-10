<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContacactsSendmail;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

//プロパティを定義
private $email;
private $title;
private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        //コントラクタでプロパティに値を格納
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // メールの設定
        return $this
                 ->from('example@gmail.com')
                 ->subject('自動返信メール')
                 ->view('contact.mail')
                 ->with([
                    'email'  => $this->email,
                    'title' => $this->title,
                    'body' => $this->body,
                 ]);
    }

    public function send(Request $request)
    {
        //バリデーション
        $request -> validate([
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'requiered'
        ]);

        // actionの値を取得
        $action = $request->input('action');

        // action以外のinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){

        // 戻るボタンの場合リダイレクト処理
        return redirect()
        ->route('contact.index')
        ->withInput($inputs);
        
    } else {
        // 送信ボタンの場合、送信処理

        // ユーザにメールを送信
        \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
        // 自分にメールを送信
        \Mail::to('自分のメールアドレス')->send(new ContactsSendmail($inputs));

        // 二重送信対策のためトークンを再発行
        $request->session()->regenerateToken();

        // 送信完了ページのviewを表示
        return view('contact.thanks');

    }
}
    }

