<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderDemoController extends Controller
{
    //
    public function getIndex()
    {
        $uploaders = \App\Uploader::orderBy('created_at', 'desc')->paginate(5);

        $hash = array(
            'uploaders' => $uploaders,
        );
        return view('uploader.index')->with($hash);
    }

    public function confirm(\App\Http\Requests\UploaderDemoRequest $request)
    {
        $username = $request->username;
        $thum_name = uniqid("THUM_") . "." . $request->file('thum')->guessExtension(); // TMPファイル名
        $request->file('thum')->move(public_path() . \Config::get('fpath.tmp'), $thum_name);
        $thum = \Config::get('fpath.tmp') . $thum_name;

        $hash = array(
            'thum' => $thum,
            'username' => $username,
        );

        return view('uploader.confirm')->with($hash);
    }

    public function finish(Request $request)
    {
        $uploader = new \App\Uploader;
        $uploader->username = $request->username;
        $uploader->save();

        // レコードを挿入したときのIDを取得
        $lastInsertedId = $uploader->id;

        // ディレクトリを作成
        if (!file_exists(public_path() . \Config::get('fpath.thum') . $lastInsertedId)) {
            mkdir(public_path() . \Config::get('fpath.thum') . $lastInsertedId, 0777);
        }

        // 一時保存から本番の格納場所へ移動
        rename(public_path() . $request->thum, public_path() . \Config::get('fpath.thum') . $lastInsertedId . "/thum." .pathinfo($request->thum, PATHINFO_EXTENSION));

        return view('uploader.finish');
    }
}
