<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingDoneMail extends Mailable
{
    use Queueable, SerializesModels;

    // 受け取る変数
    public string $userName;
    public string $userEmail;

    public function __construct($userEmail, $userName)
    {
        //変数に受け取った値をセット
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }

    public function build()
    {
        return $this->from('hello@example.com') //メールの送信元
            ->subject('完了通知')  //メールのタイトル
            ->view('emailContent')  //メールのテンプレート（view）
            ->with(['userName' => $this->userName, 'userEmail' => $this->userEmail]); //viewに変数を渡す
    }
}
