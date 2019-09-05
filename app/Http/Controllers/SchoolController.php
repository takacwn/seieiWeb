<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


/**
 * 2_学園生活
 *
 */
class SchoolController extends Controller
{

	// 0_Index
	public function index()
	{
		return view('school.index');
	}


	// 1_制服コレクション
	public function uniform()
	{
		return view('school.uniform');
	}


	// 2_クラブ活動
	public function club()
	{
		return view('school.club');
	}


	// 2_クラブ活動_詳細
	public function clubDetail($name) 
	{
		return view('school.' . $name);
	}

	// 3_ 生徒インタビュー
	public function dream() 
	{
		return view('school.dream');
	}
    
    // 4_ 学校行事
	public function event() 
	{
		return view('school.event');
	}


}

