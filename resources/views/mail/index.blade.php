@extends('layouts.master_mail')
@section('title', 'Laravel チュートリアル')

@section('content')
<h3>お問い合わせフォーム（デモ）</h3>
<p><span class="label label-danger">入力画面</span> -> 確認画面 -> 完了画面</p>

<form action="{{ route('mail.confirm') }}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group @if($errors->has('username')) has-error @endif">
        <label class="col-sm-2 control-label" for="username">名前：</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="お名前を入力してください" value="{{ old('username') }}">
            @if($errors->has('username'))<span class="text-danger">{{ $errors->first('username') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('title')) has-error @endif">
        <label class="col-sm-2 control-label" for="title">件名：</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="件名を入力してください" value="{{ old('title') }}">
            @if($errors->has('title'))<span class="text-danger">{{ $errors->first('title') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('email')) has-error @endif">
        <label class="col-sm-2 control-label" for="email">Email：</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="Emailを入力してください" value="{{ old('email') }}">
            @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('body')) has-error @endif">
        <label class="col-sm-2 control-label" for="body">内容：</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="body" name="body" placeholder="お問い合わせ内容を入力してください">{{ old('body') }}</textarea>
            @if($errors->has('body'))<span class="text-danger">{{ $errors->first('body') }}</span> @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <input type="submit" name="button1" value="確認" class="btn btn-embossed btn-primary btn-wide" />
        </div>
    </div>
</form>
@endsection
