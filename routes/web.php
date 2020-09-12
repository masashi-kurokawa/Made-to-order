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

Route::group(['middleware' => 'auth'], function() {

Route::get('/', function () {
    return view('welcome');
});

//ホーム画面
Route::get('/home/', 'HomeController@index');

//////////////////////////////////テスト一覧
//app/http/testlist/testlistController中の@index関数
Route::get('/testlist/', 'TestlistController@index');



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

////////////////////生徒一覧
Route::get('/student/', 'StudentController@index');


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


Route::get('/login/', function () {
    return view('login');
});
Route::get('/login2/', function () {
    return view('login2');
});
Route::get('/redirect', 'OAuthController@redirectToProvider');
Route::get('/callback', 'OAuthController@handleProviderCallback');

});

Auth::routes(['register' => false]);
