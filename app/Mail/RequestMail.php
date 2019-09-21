<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

// 日本語の文字化けが発生する場合下記を使用する
use Swift;
use Swift_Preferences;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$userData)
    {
      $this->title = $subject;
      $this->user = $userData;

      // 日本語の文字化けが発生する場合下記を使用する
      Swift::init(function () {
          Swift_DependencyContainer::getInstance()
              ->register('mime.qpheaderencoder')
              ->asAliasOf('mime.base64headerencoder');
          Swift_Preferences::getInstance()->setCharset('iso-2022-jp');
      });
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->view('view.name');
    // }



    public function build()
    {
      return $this->text('email.request')
          ->subject($this->title)
          ->with([
            'data' => $this->user,
          ]);
        // return $this->subject("件名")->view('/mail/pw_reset', compact(''));
    }


}
