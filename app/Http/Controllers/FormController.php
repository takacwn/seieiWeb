<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Wysijauser;   //20161110追記

//20190919追記　メール文字化け対策（メール送信方法変更）
use Illuminate\Support\Facades\Mail;
use App\Mail\MailMagagineKoudoku;


class FormController extends Controller
{

    const APP_FORM_KEY = 'seiei__';

    public static $names = array(
        'lastname'  => 'required',
        'firstname' => 'required',
        'school' => 'required',
        'email'     => 'required|confirmed',
        'mailmagazine' => 'required',
    );

    public static $messages = array(
        'lastname.required'  => 'お名前 姓が入力されていません。',
        'firstname.required' => 'お名前 名が入力されていません。',
        'school.required' => '所属、学校が入力が入力されていません。',
        'email.required'     => 'メールアドレスが入力されていません。',
        'email.confirmed' => '確認用メールアドレスが正しくありません。',
        'mailmagazine.required' => 'メールマガジンの配信有無にチェックがされていません。',
    );


    public function activate()
    {
        return view('mail.complete2');
    }


    public function confirm($key)
    {

        $row = User::where('send_key', $key)
            ->where('active', 0)
            ->where('status', 1)
            ->first();

        if (!$row) {
            abort(404);
        }

        $row->active = 1;
        if ($row->save()) {

            /*****20161110追記 MailPoetNewsLetters**ココから***/
            //statusを'1'(購読中) に変更
            $wuser = Wysijauser::where('ip',$key)
                  ->where('status',0)
                  ->first();

            if($wuser){
                $wuser->status = 1;
                $wuser->save();
            }else{
                abort(404);
            }     /*****20161110追記 MailPoetNewsLetters***ココまで**/

            return redirect('/mail/activate');
        }

        abort(500);

    }


    public function addAttrValidation($request)
    {

        $names = array_merge(self::$names, array());
        $messages = array_merge(self::$messages, array());

        if ($request->get('mailmagazine') == '1') {

            $names    = array_merge($names, [
                'site' => 'required',
            ]);
            $messages = array_merge($messages, [
                'site.required' => '配信対象にチェックされていません。',
            ]);

            if ($request->get('site') == '1') {

                $names    = array_merge($names, [
                    'tag1' => 'required',
                ]);
                $messages = array_merge($messages, [
                    'tag1.required' => '配信対象を選択してください。',
                ]);

            }

            if ($request->get('site') == '2') {

                $names    = array_merge($names, [
                    'tag2' => 'required',
                ]);
                $messages = array_merge($messages, [
                    'tag2.required' => '配信対象を選択してください。',
                ]);

            }
        }

        return [$names, $messages];

    }

    protected function setHashKey($email)
    {
        return sha1(self::APP_FORM_KEY . $email);
    }


    public function sendMail($user)
    {

        // \Mail::plain('email.confirm', [
        //     'user' => $user,
        // ], function ($message) use ($user) {
        //     $message
        //         ->to($user->email)
        //         ->subject(env('MAIL_SUBJECT') . '[誠英高等学校] 送信されたリクエストを確認してください。')
        //         ->setCharset('ISO-2022-JP')
        //         ->setEncoder(new \Swift_Mime_ContentEncoder_PlainContentEncoder('7bit'))
        //         ->setMaxLineLength(0);
        //
        // });
        Mail::to($user->email)->send(new MailMagagineKoudoku('[誠英高等学校] 送信されたリクエストを確認してください。',$user));


    }

    protected function createUser($request)
    {

        $data = $request->all();

        if ($request->get('site') == '1') {
            $data['tag'] = $request->get('tag1');
        }

        if ($request->get('site') == '2') {
            $data['tag'] = $request->get('tag2');
        }

        $data['send_key'] = $this->setHashKey($request->get('email'));

        $user = User::create($data);

        /****20161110追記***/
        //リクエストのemailをMailPoetnewsLettersのユーザーテーブルに追加（Wysijauser）
        //$wysijauser = new Wysijauser;
        // $wysijauser = Wysijauser::firstOrCreate(['email' => $request->get('email')]);   //※テーブルにレコードがあった場合Update、なかった場合Insert
        //
        // $wysijauser->firstname = $request->get('firstname');
        // $wysijauser->lastname = $request->get('lastname');
        // if($request->get('site') == '1'){
        //   $wysijauser->cf_3 = $request->get('tag1');
        // }
        // if($request->get('site') == '2'){
        //   $wysijauser->cf_3 = '通信制';
        // }
        // //$wysijauser->ip = $data['send_key'];
        // $wysijauser->ip = $this->setHashKey($request->get('email'));
        // $wysijauser->status = '0';
        // $wysijauser->save();    //リクエストのemailをMailPoetnewsLettersのユーザーテーブルに追加（Wysijauser）ココまで

        /****20190919追記　wysijauserに関するデータ登録の変更  emailがテーブルに存在しなかったらcreate 存在する場合は update***/
        if (empty($wysijauser)) {
	         if($request->get('site') == '1'){
    		       $wysijauser = Wysijauser::create([
    		           'firstname'   => $request->get('firstname'),
   		              'lastname'   => $request->get('lastname'),
                    'email'      => $request->get('email'),
   		              'cf_3'       => $request->get('tag1'),
		                'ip'         => $this->setHashKey($request->get('email')),
		                'status'     => 0,
    		       ]);
	        }else{
    		      $wysijauser = Wysijauser::create([
    		          'firstname'   => $request->get('firstname'),
   		             'lastname'   => $request->get('lastname'),
                   'email'      => $request->get('email'),
   		             'cf_3'       => '通信制',
		               'ip'         => $this->setHashKey($request->get('email')),
		               'status'     => 0,
    		      ]);
	       }   //create ここまで

       } else {     //以下update
         $wysijauser->firstname = $request->get('firstname');
         $wysijauser->lastname = $request->get('lastname');
         $wysijauser->email    = $request->get('email');
	        if($request->get('site') == '1'){
  		        $wysijauser->cf_3 = $request->get('tag1');
	        }
    	    if($request->get('site') == '2'){
  		        $wysijauser->cf_3 = '通信制';
	       }
         $wysijauser->ip = $this->setHashKey($request->get('email'));
         $wysijauser->status = '0';

         $wysijauser->save();
       }
       /****20190919追記　wysijauserに関するデータ登録の変更 ここまで***/


        if ($user) {
            $this->sendMail($user);
        }
    }


    public function isUser($email)
    {
        return User::where('email', $email)
            ->where('active', 1)
            ->where('status', 1)
            ->first();
    }


    public function index(Request $request)
    {

        $error = [];

        if ($request->isMethod('post')) {

            list($names, $messages) = $this->addAttrValidation($request);


            $valid = \Validator::make($request->all(), $names, $messages);

            if ($this->isUser($request->get('email'))) {
                $error[] = '既にメールアドレスが登録されています。';
            }


            if (!count($error) && !$valid->fails()) {

                if ($request->get('send')) {

                    $this->createUser($request);

                    return redirect('mail/complete');
                }

                return view('mail.confirm');
            } else {
                $error = array_merge($error, $valid->errors()->all());
            }
        }

        return view('mail.form', [
            'error' => $error,
        ]);

    }


    public function complete()
    {
        return view('mail.complete');
    }



    public function stop(Request $request)
    {
        $error = [];

        if ($request->isMethod('post')) {

            $valid = \Validator::make($request->all(), [
                'email'     => 'required|confirmed',
            ], [
                'email.required'     => 'メールアドレスが入力されていません。',
                'email.confirmed' => '確認用メールアドレスが正しくありません。',
            ]);

            if (!$valid->fails()) {

                $row = User::where('status', 1)
                    ->where('active', 1)
                    ->where('email', $request->get('email'))
                    ->first();


                if ($row) {
                    $row->status = 0;

                    if ($row->save()) {

                        /*****20161110追記 MailPoetNewsLetters**ココから***/
                        //statusを'-1'(購読中止) に変更
                        $wuser = Wysijauser::where('status',1)
                              ->where('email', $request->get('email'))
                              ->first();
                        if($wuser){
                            $wuser->status = -1;
                            $wuser->save();
                        }else{
                            abort(500);
                        }     /*****20161110追記 MailPoetNewsLetters***ココまで**/


                        return redirect('/mail/stop/complete');
                    }
                    abort(500);
                } else {
                    $error[] = '入力されたメールアドレスは存在しません。';
                }
            } else {
                $error = $valid->errors()->all();
            }
        }

        return view('mail.stop', [
            'error' => $error,
        ]);

    }

    public function stopComplete()
    {
        return view('mail.complete3');
    }

}
