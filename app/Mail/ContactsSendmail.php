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
private $company;
private $name;
private $telephone;
private $email;
private $date;
private $gender;
private $joy;
private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        //コントラクタでプロパティに値を格納
        $this->company = $inputs['company'];
        $this->name = $inputs[ 'name' ];
        $this->telephone = $inputs[ 'telephone'];
        $this->email = $inputs['email'];
        $this->date = $inputs[ 'date'];
        $this->gender = $inputs[ 'gender'];
        $this->job = $inputs[ 'job'];    
        $this->body = $inputs[ 'body'];   
 
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
                     'company' => $this->company,
                     'name'  => $this->name,
                     'telephone'  => $this->telephone,
                     'email'  => $this->email,
                     'date'  => $this->date,
                     'gender'  => $this->gender,
                     'job'  => $this->job,
                     'body' => $this->body,
                 ]);
    }

   
    }

