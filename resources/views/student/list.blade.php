@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
<div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
    <h1><small>受講生一覧</small></h1>
</div>
<div class="row" style="margin-bottom: 30px;">
    <div class="col-sm-10" style="margin-bottom: 10px;">
        <form method="get" action="" class="form-inline">
            <div class="form-group">
                <input type="text" name="keyword" class="form-control" value="{{$keyword}}" placeholder="検索キーワード">
            </div>
            <input type="submit" value="検索" class="btn btn-info">
        </form>
    </div>
    <div class="col-sm-2">
        <a href="/student/new" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>tel</th>
            <th>opration</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->tel}}</td>
            <td>
                <a href="/student/edit/{{$student->id}}" class="btn btn-primary btn-sm">編集</a>
            </td>
            <td>
                <form action="/student/delete/{{$student->id}}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<!-- page control -->
{{-- {!! $students->render() !!}--}}
{!! $students->appends(['keyword'=>$keyword])->render() !!}

@endsection
@section('script')
    <script>
    $(function(){
        $(".btn-dell").click(function(){
            if(confirm("本当に削除しますか？")){
                //そのままsubmit（削除）
            }else{
                //cancel
                return false;
            }
        });
    });
    </script>
@endsection
