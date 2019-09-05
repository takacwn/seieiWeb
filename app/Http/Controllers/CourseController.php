<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{

	public function index()
	{
		return view('course.index');
	}


	public function detail($name)
	{
		return view('course.' . $name);
	}

}
