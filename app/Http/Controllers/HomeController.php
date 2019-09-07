<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * 5_通信制
 */
class HomeController extends Controller
{


	public function __construct()
	{
		app('view')->share('tushin', 1);
	}
	

	// 0_Index
	public function index()
	{

		$news = [];

		$uri = env('BLOG2_DOMAIN_URL') . '/api.php';
		$data = @json_decode(@file_get_contents($uri));


		if ($data) {
			$news = $data;
		}

		return view('home_schooling.index', [
			'news' => $news,
		]);
	}


	// 1_通信制とは
	public function about()
	{
		return view('home_schooling.about');
	}


	// 2_学習方法
	public function way()
	{
		return view('home_schooling.way');
	}


	// 3_学園生活
	public function life()
	{
		return view('home_schooling.life');
	}


	// 4_入学案内
	public function guide()
	{
		return view('home_schooling.guide');
	}

}
