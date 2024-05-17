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

   
    }

