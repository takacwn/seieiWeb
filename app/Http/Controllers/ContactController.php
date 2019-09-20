<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//20190919追記　メール文字化け対策（メール送信方法変更）
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends FormController
{

    public function sendContactMail($data)
    {

        // \Mail::plain('email.contact', [
        //     'data' => $data,
        // ], function ($message) {
        //     $message
        //         ->to(env('MAIL_CONTACT_ADDRESS'))
        //         ->subject(env('MAIL_SUBJECT') . '[誠英高等学校] 問い合わせフォーム')
        //         ->setCharset('ISO-2022-JP')
        //         ->setEncoder(new \Swift_Mime_ContentEncoder_PlainContentEncoder('7bit'))
        //         ->setMaxLineLength(0);
        //
        // });

        Mail::to('t-watanabe@seiei.ac.jp')->send(new ContactMail('[誠英高等学校] 問い合わせフォーム',$data));

    }


    public function index(Request $request)
    {

        $error = [];

        if ($request->isMethod('post')) {

            list($names, $messages) = $this->addAttrValidation($request);

            $names = array_merge($names, [
                'subject'   => 'required',
                'body'      => 'required',
            ]);
            $messages = array_merge($messages, [
                'subject.required' => '件名が入力されていません。',
                'body.required' => 'お問合わせ内容が入力されていません。'
            ]);

            $valid = \Validator::make($request->all(), $names, $messages);


            if ($request->get('mailmagazine') == '1' && $this->isUser($request->get('email'))) {
                $error[] = '既にメールアドレスが登録されています。';
            }


            if (!count($error) && !$valid->fails()) {

                if ($request->get('send')) {    //confirm.blade.phpから送られたFormデータだった場合

                    // 配信を希望するにチェックが入ってるとき
                    if ($request->get('mailmagazine') == '1') {
                        $this->createUser($request);
                    }

                    $data = $request->all();

                    if ($request->get('mailmagazine') == '1') {
                        $data['label'] = '希望する';
                    } else if($request->get('mailmagazine') == '9') {
                        $data['label'] = '既に登録している';
                    } else {
                        $data['label'] = '希望しない';
                    }

                    $this->sendContactMail((object)$data);

                    return redirect('contact/complete');
                }
                return view('contact.confirm');
            } else {
                $error = array_merge($error, $valid->errors()->all());
            }
        }

        return view('contact.form', [
            'error' => $error,
        ]);

    }

    public function complete()
    {
        return view('contact.complete');
    }

}
