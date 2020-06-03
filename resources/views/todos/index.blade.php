@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-10"><h3>{{ Auth::user()->name }}'s Todoリスト</h3></div>
        <div class="col-sm-2"><a href="{{ route('todos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Todo追加</a></div>
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
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo-> id}}</td>
            <td>{{$todo-> title}}</td>
            <td>{{$todo-> memo}}</td>
            <td>
                <a href="{{ route('todos.edit',$todo->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i>編集</a>
            </td>
            <td>
                <form action="{{ route('todos.destroy', $todo->id)}}" method="post">
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
