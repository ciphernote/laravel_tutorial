@extends('layouts.master_uploader')
@section('title', 'Laravel チュートリアル')

@section('content')
<h3>プロフィール画像</h3>
<p><span class="label label-danger">入力画面</span> -> 確認画面 -> 完了画面</p>

<form action="{{ route('uploader.confirm') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group @if($errors->has('username')) has-error @endif">
        <label class="col-sm-4 control-label" for="username">名前：</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="username" name="username" placeholder="お名前を入力してください" value="{{ old('username') }}">
            @if($errors->has('username'))<span class="text-danger">{{ $errors->first('username') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('thum')) has-error @endif">
        <label class="col-sm-4 control-label" for="thum">サムネイル画像：</label>
        <div class="col-sm-6">
            <input type="file" id="thum" name="thum" size="50" value="{{ old('thum') }}">
            <span class="text-muted">※ 横幅最大600px、画像サイズ最大1MB、PNG/JPG/GIF 可能<br></span>
            @if($errors->has('thum'))<span class="text-danger">{{ $errors->first('thum') }}</span> @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 text-center">
            <input type="submit" name="button1" value="確認" class="btn btn-embossed btn-primary btn-wide" />
        </div>
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">名前</th>
            <th scope="col">サムネイル画像</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($uploaders as $uploader)
            <tr>
                <td>{{ $uploader->username }}</td>
                <td><img src="{{ $uploader->pic_thum() }}" width="150"/></td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
    {{ $uploaders->links() }}
</div>
@endsection
