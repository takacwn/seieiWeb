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


Route::get('/test2', function () {
    return view('test2');
});
