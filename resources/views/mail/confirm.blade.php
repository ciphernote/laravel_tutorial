@extends('layouts.master_mail')
@section('title', 'Laravel チュートリアル（初級）')

@section('content')
<h3>お問い合わせフォーム（デモ）</h3>
<p>入力画面 -> <span class="label label-danger">確認画面</span> -> 完了画面</p>

<div class="alert alert-success" role="alert">この内容で送信してもよろしいですか？</div>

<form action="{{ route('mail.finish') }}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="title" value="{{$title}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="hidden" name="body" value="{{$body}}">

    <div class="row">
        <label class="col-sm-2 control-label" for="title">件名：</label>
        <div class="col-sm-10">{{$title}}</div>
    </div>
    <div class="row">
        <label class="col-sm-2 control-label" for="email">Email：</label>
        <div class="col-sm-10">{{$email}}</div>
    </div>
    <div class="row">
        <label class="col-sm-2 control-label" for="body">内容：</label>
        <div class="col-sm-10">{{$body}}</div>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <input type="submit" name="button1" value="送信" class="btn btn-primary btn-wide" />
        </div>
    </div>
</form>
@endsection
