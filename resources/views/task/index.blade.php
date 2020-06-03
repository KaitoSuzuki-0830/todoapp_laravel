@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-10"><h3>taskリスト一覧</h3></div>
        <div class="col-sm-2"><a href="{{ route('task.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> task追加</a></div>
    </div>
</div>
    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>タイトル</td>
          <td>メモ</td>
          <td></td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task-> id }}</td>
            <td>{{$task->title}}</a></td>
            <td>
                <form action="{{ route('task.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="fas fa-check"></i>完了</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
</div>
@endsection
