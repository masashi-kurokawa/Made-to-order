<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Write_survey;
use App\Models\Select_survey;

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
    public function index()
    {
        $surveys = Survey::all();
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
    public function store(Request $request)
    {

        // //既存登録処理
        // Survey::create($request->all());
        // Write_survey::create($request->all());

        // 参考処理
        $survey = new Survey;
        $survey->title = $request->title;
        $survey->status = $request->status;
        $survey->save();

        $write_survey = new Write_survey;
        $write_survey->survey_id = $survey->id;
        $write_survey->question = $request->question;
        // // question_numberに何問目か自動で振り分ける処理をフロントで作る必要ある
        $write_survey->question_number = $survey->id;
        $write_survey->save();

        dump($write_survey);

        $select_survey = new Select_survey;
        $select_survey->survey_id = $survey->id;
        $select_survey->question = $request->choice;
        // question_numberに何問目か自動で振り分ける処理をフロントで作る必要ある
        $select_survey->question_number = $survey->id;
        $select_survey->save();

        dump($select_survey);

        // return redirect('/survey')->with('flash_message', __('Registered.'));

        // return redirect()->route('survey.index')->with('success', 'データが登録されました');
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
