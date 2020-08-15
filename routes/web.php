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

//テスト新規作成
Route::get('/testcreate/', function () {
    return view('testcreate');
});

//テスト受講
Route::get('/test/', function () {
    return view('test');
});

//テスト終了
Route::get('/testend/', function () {
    return view('testend');
});

//アンケート一覧
Route::get('/surveylist/', function () {
    return view('surveylist');
});

//アンケート新規作成
Route::get('/surveycreate/', function () {
    return view('surveycreate');
});

//アンケート受講
Route::get('/survey/', function () {
    return view('survey');
});

//アンケート終了
Route::get('/surveyend/', function () {
    return view('surveyend');
});

//生徒一覧
Route::get('/student/', function () {
    return view('student');
});

//生徒詳細
Route::get('/student-details/', function () {
    return view('student-details');
});

//詳細
Route::get('/details/', function () {
    return view('details');
});

//詳細
Route::get('/score/', function () {
    return view('score');
});
