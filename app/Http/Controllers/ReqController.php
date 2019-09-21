<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//20190919追記　メール文字化け対策（メール送信方法変更）
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;

class ReqController extends FormController
{

    public function sendRequestMail($data)
    {

        // \Mail::plain('email.request', [
        //     'data' => $data,
        // ], function ($message) {
        //     $message
        //         ->to(env('MAIL_FROM_ADDRESS'))
        //         ->subject(env('MAIL_SUBJECT') . '[誠英高等学校] 資料請求フォーム')
        //         ->setCharset('ISO-2022-JP')
        //         ->setEncoder(new \Swift_Mime_ContentEncoder_PlainContentEncoder('7bit'))
        //         ->setMaxLineLength(0);
        //
        // });

        Mail::to(env('MAIL_CONTACT_ADDRESS'))->send(new RequestMail('[誠英高等学校] 資料請求・申し込みフォーム',$data));

    }



    public function index(Request $request)
    {

        $error = [];

        $isCheck = [];

        if ($request->isMethod('post')) {

            foreach (['open1','open2', 'disp1', 'disp2', 's_guide', 's_youkou'] as $key) {
                if ($request->has($key)) {
                    $isCheck[] = true;
                }
            }


            if (!count($isCheck)) {
                $error[] = 'お申し込み内容が選択されていません。';
            }

            list($names, $messages) = $this->addAttrValidation($request);


            $valid = \Validator::make($request->all(), $names, $messages);

            if ($request->get('mailmagazine') == '1' && $this->isUser($request->get('email'))) {
                $error[] = '既にメールアドレスが登録されています。';
            }


            if (!count($error) && !$valid->fails()) {

                if ($request->get('send')) {


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

                    $this->sendRequestMail((object)$data);

                    return redirect('request/complete');
                }
                return view('req.confirm');
            } else {
                $error = array_merge($error, $valid->errors()->all());
            }
        }

        return view('req.form', [
            'error' => $error,
        ]);

    }


    public function complete()
    {
        return view('req.complete');
    }
}
