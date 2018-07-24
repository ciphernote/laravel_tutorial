@extends('layouts.master_mail')
@section('title', 'Laravel チュートリアル')

@section('content')
<h3>お問い合わせフォーム（デモ）</h3>
<p>入力画面 -> 確認画面 -> <span class="label label-danger">完了画面</span></p>

<div class="alert alert-success" role="alert">お問い合わせ内容を送信しました！</div>
<div class="text-center">
    <a href="{{ route('mail.index')}}" class="btn btn-embossed btn-primary btn-wide">TOPへ</a>
</div>
@endsection
