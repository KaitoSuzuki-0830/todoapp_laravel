{{-- @extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3>Task 追加</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('task.store') }}">
          @csrf
          <div class="form-group">
              <label for="title">タイトル:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <button type="submit" class="btn btn-primary">追加</button>
      </form>
  </div>
</div>
</div>
</div>
@endsection --}}
