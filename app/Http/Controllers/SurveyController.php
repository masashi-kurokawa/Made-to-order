<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Write_survey;
use App\Models\Select_survey;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SurveyController extends Controller
{
    // // 元表示
    // public function index()
    // {
    //    return view('survey');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    public function index(Request $request)
    {
        $surveys = Survey::all();
        $postsurvey = $request->all();
        dump($surveys);

        return view('survey.index' , compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // storeはPOSTで送信される
     //新規作成ページ用
    public function store(Request $request)
    {

        // //既存登録処理
        // Survey::create($request->all());
        // Write_survey::create($request->all());

        // 参考処理
        $survey = new Survey;
        $postsurvey = $request->all();
        // アンケート登録してから問題の保存
        $surveyno = $request->input('ak_title');
        $surveystatus = $request->input('status');
        dump($surveystatus);
        // dump($surveyno);
        // DB::table('surveys')->insert([
        //   'title' => "$surveyno", //SlackIDじゃないと入らない
        //   'status' => "$surveystatus",
        //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
        //   'updated_at' => Carbon::now()  //時間が違う、場所の設定が違うのかも
        // ]);


        //問題の保存
        $surveysno = DB::table('surveys')->whereTitle("アンケート1")->value('id'); //テストの番号　撮り方の選定があまい

        $surveyno = $request->input('id');
        // dump($surveysno);
        for ($i=1; $i <= $surveyno; $i++) {
          //survey_id　アンケート自体のID　登録完了してから入れる
          $choice_text[$i] = $request->input("choice_text$i");
          $describing_text[$i] = $request->input("describing_text$i");
          $question_number[$i] = $i;
          // dump($choice_text[$i]);
          if (!empty($choice_text[$i])) {
            // dump($choice_text[$i]);
            // DB::table('select_surveys')->insert([
            //   'survey_id' => "$surveysno",
            //   'question' => "$choice_text[$i]",
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now()  //時間が違う、場所の設定が違うのかも
            // ]);
          } else {
            // dump($describing_text[$i]);
            // DB::table('write_surveys')->insert([
            //   'survey_id' => "$surveysno",
            //   'question' => "$describing_text[$i]",
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now()  //時間が違う、場所の設定が違うのかも
            // ]);
          }
        }





        // route('survey.index')の列にあとで戻す
        // return redirect()->route('survey.index')->with('success', 'データが登録されました');
        // return redirect()->route('survey.create')->with('success', 'データが登録されました');
        return view('survey.create',compact('postsurvey'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::find($id);
        return view('survey.show',compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $survey = Survey::find($id);
        $write_survey = Write_survey::where('survey_id', $id)->get();
        $select_survey = Select_survey::where('survey_id', $id)->get();
        //確認用
        // dump($write_survey);
        // 初期記入方法
        // return view('survey.edit',compact('survey'));
        return view('survey.edit', [
              'survey' => $survey,
              'write_surveys' => $write_survey,
              'select_surveys' => $select_survey,
            ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'title' => $request -> title,
            'status' =>$request -> status
        ];
        Survey::where('id', $id) ->update($update);
        return back()->with('success', '編集完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Survey::where('id', $id)->delete();
        return redirect()->route('survey.index')->with('success', '削除しました');
    }
}
