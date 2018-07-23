@extends('layouts.master_uploader')
@section('title', 'Laravel チュートリアル（初級）')

@section('content')
<h3>プロフィール画像</h3>
<p>入力画面 -> <span class="label label-danger">確認画面</span> -> 完了画面</p>

<div class="alert alert-success" role="alert">この内容で登録してもよろしいですか？</div>

<form action="{{ route('uploader.finish') }}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="username" value="{{$username}}">
    <input type="hidden" name="thum" value="{{$thum}}">

    <div class="row">
        <label class="col-sm-4 control-label" for="username">名前：</label>
        <div class="col-sm-8">{{$username}}</div>
    </div>
    <div class="row">
        <label class="col-sm-4 control-label" for="thum">サムネイル画像：</label>
        <div class="col-sm-8"><img src="{{$thum}}" width="150"/></div>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
        </div>
    </div>
</form>
@endsection
