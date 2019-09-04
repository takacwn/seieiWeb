<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * 1_学校案内
 *
 */
class AboutController extends Controller
{

	// 0_Index
	public function index()
	{
		return view('about.index');
	}


	// 理事長メッセージ
	public function message()
	{
		return view('about.message');
	}

	// 校長メッセージ
	public function message2()
	{
		return view('about.message2');
	}


	// 教育理念・建学の精神
	public function idea()
	{
		return view('about.idea');
	}


	// 三田尻誠英の特色
	public function feature()
	{
		return view('about.feature');
	}


	// 三田尻誠英の歴史
	public function history($page = null)
	{
	    if ($page) {
            return view('about.history' . $page);
        }
		return view('about.history');
	}


	// 三田尻誠英の沿革
	public function historyDetail()
	{
		return view('about.historyDetail');
	}


	// 校訓・校歌・校章
	public function school()
	{
		return view('about.school');
	}


	// 組織
	public function organization()
	{
		return view('about.org');
	}


	// 学校評価
	public function evaluation()
	{
		return view('about.evaluation');
	}


}
