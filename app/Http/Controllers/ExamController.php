<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExamController extends Controller
{

	// 0_Index
	public function index()
	{
		$news = [];

		$uri = env('BLOG_DOMAIN_URL') . '/api.php?cat=nyushi';
		$data = @json_decode(@file_get_contents($uri));

		if ($data) {
			$news = $data;
		}

		return view('exam.index', [
			'news' => $news,
		]);
	}


	// 1_進路_就職
	public function course()
	{
		return view('exam.course');
	}


	// 2_入試要項（準備中）
	public function points()
	{
		return view('exam.points');
	}

	// 3_学校見学
	public function tour()
	{
		return view('exam.tour');
	}


	// 4_オープンスクール
	public function open()
	{
		return view('exam.open');
	}

	// 5_入試要項_一般A
	public function ippan_a()
	{
		return view('exam.ippan_a');
	}

	// 6_入試要項_一般B
	public function ippan_b()
	{
		return view('exam.ippan_b');
	}

	// 7_入試要項_推薦
	public function suisen()
	{
		return view('exam.suisen');
	}

	//5_入試説明会
	public function explanation()
	{
		return view('exam.explanation');
	}

	//6_入試説明会2 テスト用
	public function explanation2()
	{
		return view('exam.explanation2');
	}

}
