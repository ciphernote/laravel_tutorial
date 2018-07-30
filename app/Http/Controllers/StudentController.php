<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 一覧画面
    public function getIndex(Request $rquest)
    {
        //キーワード受け取り
        $keyword = $rquest->input('keyword');

        //クエリ生成
        $query = \App\Student::query();

        //もしキーワードがあったら
        if(!empty($keyword))
        {
            $query->where('email','like','%'.$keyword.'%')->orWhere('name','like','%'.$keyword.'%');
        }

        //ページネーション
        $students = $query->orderBy('id','desc')->paginate(10);
        return view('student.list')->with('students',$students)->with('keyword',$keyword);
    }

    // 新規登録画面
    public function new_index()
    {
        return view('student.new_index');
    }

    public function new_confirm(\App\Http\Requests\CheckStudentRequest $request)
    {
        $data = $request->all();
        return view('student.new_confirm')->with($data);
    }

    public function new_finish(\App\Http\Requests\CheckStudentRequest $request)
    {
        // Studentオブジェクト生成
        $student = new \App\Student;

        // 値の登録
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;

        // 保存
        $student->save();

        // 一覧にリダイレクト
        return redirect()->to('student/list');
    }

    // 編集画面
    public function edit_index($id)
    {
        $student = \App\Student::findOrFail($id);
        return view('student.edit_index')->with('student',$student);
    }

    public function edit_confirm(\App\Http\Requests\CheckStudentRequest $request)
    {
        $data = $request->all();
        return view('student.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    {
        //レコードを検索
        $student = \App\Student::findOrFail($id);
        //値を代入
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;

        //保存（更新）
        $student->save();

        //リダイレクト
        return redirect()->to('student/list');
    }

    // 削除画面
    public function us_delete($id){
        //削除対象レコードを検索
        $user = \App\Student::find($id);
        //削除
        $user->delete();
        //リダイレクト
        return redirect()->to('student/list');
    }
}
