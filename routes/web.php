<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// 0 トップ
Route::get('/', 'FrontController@index');

// 1_学校案内
Route::get('about//', 'AboutController@index');
Route::get('about/message', 'AboutController@message'); // done
Route::get('about/message2', 'AboutController@message2'); // done
Route::get('about/idea', 'AboutController@idea'); // done
Route::get('about/history/{page}', 'AboutController@history');
Route::get('about/history', 'AboutController@history');
Route::get('about/history-detail', 'AboutController@historyDetail'); // done
Route::get('about/evaluation', 'AboutController@evaluation'); // done
Route::get('about/organization', 'AboutController@organization'); // done
Route::get('about/school', 'AboutController@school'); // done
Route::get('about//', 'AboutController@index'); // done


// 2_学校生活
Route::get('school/club/{name}', 'SchoolController@clubDetail'); // done
Route::get('school/club', 'SchoolController@club'); // done
Route::get('school/uniform', 'SchoolController@uniform'); // done
Route::get('school//', 'SchoolController@index');
Route::get('school/dream', 'SchoolController@dream');
Route::get('school/event', 'SchoolController@event');

// 3_学科・コース
Route::get('course/{name}', 'CourseController@detail');
Route::get('course', 'CourseController@index');


// 4_入試情報
Route::get('exam/course', 'ExamController@course');
Route::get('exam/tour', 'ExamController@tour');
Route::get('exam/open', 'ExamController@open');
Route::get('exam/points', 'ExamController@points');
Route::get('exam/suisen', 'ExamController@suisen');
Route::get('exam/ippan_a', 'ExamController@ippan_a');
Route::get('exam/ippan_b', 'ExamController@ippan_b');
Route::get('exam/explanation', 'ExamController@explanation');
Route::get('exam/explanation2', 'ExamController@explanation2');
Route::get('exam/', 'ExamController@index');

// 5_通信制
Route::get('home_schooling/about', 'HomeController@about');
Route::get('home_schooling/guide', 'HomeController@guide');
Route::get('home_schooling/way', 'HomeController@way');
Route::get('home_schooling/life', 'HomeController@life');
Route::get('home_schooling/', 'HomeController@index');




Route::get('/test2', function () {
    return view('test2');
});
