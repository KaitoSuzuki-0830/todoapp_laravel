@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3>Todo 内容変更</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('todos.update', $todo->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Todo</label>
                <input type="text" class="form-control" name="title" value={{ $todo->title }}>
            </div>
            <div class="form-group">
                <label for="memo">メモ</label>
                <input type="text" class="form-control" name="memo" value={{ $todo->memo }}>
            </div>

            <button type="submit" class="btn btn-primary">変更</button>
        </form>
    </div>
</div>
</div>
@endsection
