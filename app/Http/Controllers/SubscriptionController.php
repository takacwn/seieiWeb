<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//20190919追記　メール文字化け対策（メール送信方法変更）
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;
use App\Mail\SubscriptionConfirmMail;

class SubscriptionController extends FormController
{

    public function sendSubscriptionMail($data)
    {

//         \Mail::plain('email.subscription', [
//             'data' => $data,
//         ], function ($message) {
//             $message
//                 ->to(env('MAIL_FROM_ADDRESS'))
// //                ->to('t-watanabe@seiei.ac.jp')
//                 ->subject(env('MAIL_SUBJECT') . '[誠英高等学校] 入試説明会の申込')
//                 ->setCharset('ISO-2022-JP')
//                 ->setEncoder(new \Swift_Mime_ContentEncoder_PlainContentEncoder('7bit'))
//                 ->setMaxLineLength(0);
//
//         });

          Mail::to(env('MAIL_CONTACT_ADDRESS'))->send(new SubscriptionMail('[誠英高等学校] 入試説明会の申込',$data));

    }


    public function index(Request $request)
    {

        $error = [];

        if ($request->isMethod('post')) {

            list($names, $messages) = $this->addAttrValidation($request);

            $names = array_merge($names, [
                'parentfirstname'   => 'required',
                'parentlastname'    => 'required',
                'join_num'          => 'required',
                'join_area'         => 'required',
            ]);
            $messages = array_merge($messages, [
                'firstname.required' => '生徒の方のお名前 名が入力されていません。',
                'lastname.required' => '生徒の方のお名前 姓が入力されていません。',
                'parentfirstname.required' => '保護者の方のお名前 名が入力されていません。',
                'parentlastname.required' => '保護者の方のお名前 姓が入力されていません。',
                'join_num.required'       => '参加者数が入力されていません。',
                'join_area.required'      => '参加エリアが入力されていません。',
            ]);

            //連想配列から特定の要素を削除する（ mailmagazine ) 2016.10.07 追記
            unset($names['mailmagazine']);
            unset($messages['mailmagazine.required']);

            $valid = \Validator::make($request->all(), $names, $messages);

            if (!count($error) && !$valid->fails()) {

                if ($request->get('send')) {

                    $data = $request->all();

                    $this->sendSubscriptionMail((object)$data);
                    $this->sendSubscriptionConfirmMail((object)$data);

                    //return redirect('subscription/complete');     //こっちを呼び出すと，９８行目に飛ぶケド…変数の受け渡しができない…？通常はこっち
                    return view('subscription.complete',$data);    //controllerから変数の受け渡し、viewでの展開
                }
                return view('subscription.confirm');
            } else {
                $error = array_merge($error, $valid->errors()->all());
            }
        }

        return view('subscription.form', [
            'error' => $error,
        ]);

    }

//*****************************************
    public function sendSubscriptionConfirmMail($data)
    {
        // \Mail::plain('email.subscriptionconfirm', [
        //     'data' => $data,
        // ], function ($message) use ($data) {
        //     $message
        //         ->to($data->email)
        //         ->subject(env('MAIL_SUBJECT') . '[誠英高等学校] 入試説明会お申込みの確認')
        //         ->setCharset('ISO-2022-JP')
        //         ->setEncoder(new \Swift_Mime_ContentEncoder_PlainContentEncoder('7bit'))
        //         ->setMaxLineLength(0);
        // });
        Mail::to($data->email)->send(new SubscriptionConfirmMail('[誠英高等学校] 入試説明会お申込みの確認',$data));
    }
//*************************************
    public function complete()
    {
        $join_area = "＠＠＠";
        return view('subscription.complete',compact('join_area'));    //controllerから変数の受け渡し、viewでの展開
    }

}
