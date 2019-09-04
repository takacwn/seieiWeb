<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;


/**
 *
 *  6_フッターリンク + 7_その他
 */
class FrontController extends Controller
{

	const INTRO_REOPEN_TIME = 60;

	// トップページ
	public function index(Request $request)
	{
		$open = true;
        $news = [];


		if (!$request->cookie('visit')) {
			$cookie = cookie('visit', '1', self::INTRO_REOPEN_TIME);
			\Cookie::queue($cookie);
			$open = false;
		}

		$uri = env('BLOG_DOMAIN_URL') . '/api.php';
		$data = @json_decode(@file_get_contents($uri));

		if ($data) {
			$news = $data;
		}

		return view('index', ['top'  => 'page-top','open' => $open,'news' => $news,]);

		//return view('test2');    
	}

	public function mail()
	{
		return view('front.mail');
	}


	// 1_教職員採用
	public function recruit()
	{
		return view('front.recruit');
	}


	// 2_資料ダウンロード
	public function download()
	{
		return view('front.download');
	}


	// 4_いじめ防止基本方針
	public function ijime()
	{
		return view('front.ijime');
	}


	// 5_お問い合わせ_1
	public function req(Request $request)
	{
	    if ($request->isMethod('post')) {
	        if ($request->has('send')) {
	            return redirect('request/complete');
            }
            return view('req.confirm');
        }
		return view('req.form');
	}


	// 6_アクセス
	public function access()
	{
		return view('front.access');
	}


}
