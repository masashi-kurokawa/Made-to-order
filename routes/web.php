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

// Route::group(['middleware' => 'auth'], function() {

Route::get('/', function () {
    return view('welcome');
});

//ホーム画面
Route::get('/home/', 'HomeController@index');

//テスト一覧
//app/http/testlist/testlistController中の@index関数
Route::get('/testlist/', 'TestlistController@index');

//テスト新規作成
Route::post('/testcreate/', 'TestcreateController@index');
Route::get('/testcreate/', 'TestcreateController@index');



//テスト受講
Route::get('/test/', function () {
    return view('test');
});
Route::get('/test', 'TestController@index');

//テスト詳細・編集
Route::get('/testedit/{id}', 'TesteditController@edit');
Route::post('/testedit/{id}', 'TesteditController@editRegister');

//テスト削除
Route::post('/testlist/delete/{id}', 'TestlistController@delete');

//テスト終了
Route::get('/testend/', function () {
    return view('testend');
});

//アンケート
Route::resource('survey', 'SurveyController');

// アンケート受講
Route::get('/take_survey/', 'Take_surveyController@index');

//アンケート新規作成
Route::get('/surveycreate/', function () {
    return view('surveycreate');
});

//アンケート詳細・編集
// Route::get('/surveyedit/', 'SurveyeditController@index');
// Route::get('/surveyedit/', function () {
//     return view('surveyedit');
// });

//アンケート終了
// Route::get('/surveyend/', function () {
//     return view('surveyend');
// });

//生徒一覧
Route::get('/student/', 'StudentController@index');


//生徒詳細
Route::get('/student_details/{name}', 'Student_detailsController@index')->name('student_details');


//詳細
Route::get('/details/', function () {
    return view('details');
});

//詳細
Route::get('/score/', function () {
    return view('score');
});

//未採点
Route::get('/grade/', 'GradeController@index')->name('grade.index');
Route::post('/grade/', 'GradeController@index');

Route::get('/grade/{id}/edit/{user_id}', 'GradeController@showEditForm')->name('grade.edit');
Route::post('/grade/{id}/edit/{user_id}', 'GradeController@edit');
// Route::post('/grade/{id}/edit', 'GradeController@edit');

// ログアウト処理
Route::get('/logout',[
  'uses' => 'HomeController@getLogout',
  'as' => 'login'
]);

// サンプル　2020/09/10 CRUD処理理解のため石田作成。プロジェクト終了後削除する。
Route::resource('item', 'ItemController');

//点数早見表（試し追加）
Route::get('/score', 'ScoreController@index');

// });
//
Auth::routes(['register' => false]);
