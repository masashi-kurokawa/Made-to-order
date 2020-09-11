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

//ホーム画面　ログイン前
Route::get('/home/', 'HomeController@index');

//ホーム画面　ログイン後
// Route::get('/home2/', 'Home2Controller@index');
Route::get('/home2/', function () {
    return view('home2');
});

//テスト一覧
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

//テスト詳細・編集
Route::get('/testedit/', 'TesteditController@edit');

//テスト終了
Route::get('/testend/', function () {
    return view('testend');
});

//アンケート一覧
Route::get('/surveylist/', 'SurveylistController@index');

//アンケート新規作成
Route::get('/surveycreate/', function () {
    return view('surveycreate');
});

//アンケート受講
Route::get('/survey/', function () {
    return view('survey');
});

//アンケート詳細・編集
Route::get('/surveyedit/', function () {
    return view('surveyedit');
});

//アンケート終了
Route::get('/surveyend/', function () {
    return view('surveyend');
});

//生徒一覧
Route::get('/student/', 'StudentController@index');


//生徒詳細
Route::get('/student_details/', 'Student_detailsController@index');

//詳細
Route::get('/details/', function () {
    return view('details');
});

//詳細
Route::get('/score/', function () {
    return view('score');
});

// サンプル　2020/09/10 CRUD処理理解のため石田作成。プロジェクト終了後削除する。
Route::resource('item', 'ItemController');

//点数早見表（試し追加）
// Route::get('/score/', 'ScoreController@index');
// Route::get('/score', 'ScoreController@index');
//検索結果を表示する
// Route::get('/serch', 'ScoreController@index');

/*
>>>>>>> slackOauth
Route::get('/login/', function () {
    return view('login');
});
Route::get('/login2/', function () {
    return view('login2');
});
Route::get('/redirect', 'OAuthController@redirectToProvider');
Route::get('/callback', 'OAuthController@handleProviderCallback');

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/', 'AuthTestController@index')->name('authtest');;
Route::post('/auth/', 'AuthTestController@index');
*/
