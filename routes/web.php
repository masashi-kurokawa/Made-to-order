<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//ホーム画面
Route::get('/home/', function () {
    return view('home');
});

//テスト一覧
Route::get('/testlist/', function () {
    return view('testlist');
});

//テスト受講
Route::get('/test/', function () {
    return view('test');
});

//アンケート一覧
Route::get('/surveylist/', function () {
    return view('surveylist');
});

//アンケート受講
// Route::get('/home/surveylist/survey/', function(){
//   return 'アンケート受講';
// });

//生徒一覧
Route::get('/student/', function () {
    return view('student');
});

//
// Route::get('/home/student/details/', function(){
//   return '生徒詳細';
// });
//
// Route::get('/home/student/details/testanswer/', function(){
//   return 'テスト回答内容';
// });
//
// Route::get('/home/student/details/surveyanswer/', function(){
//   return 'アンケート回答一覧';
// });
