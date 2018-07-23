@extends('layouts.master_uploader')
@section('title', 'Laravel チュートリアル（初級）')

@section('content')
<h3>プロフィール画像</h3>
<p>入力画面 -> 確認画面 -> <span class="label label-danger">完了画面</span></p>

<div class="alert alert-success" role="alert">データベースに画像を登録しました！</div>
<div class="text-center">
    <a href="{{ route('uploader.index')}}" class="btn btn-embossed btn-primary">TOPへ</a>
</div>
@endsection
