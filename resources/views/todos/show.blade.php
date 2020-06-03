@extends('layouts.app')
@section('content')
<div class="container">
        <div class="col-sm-10"><h3>内容確認</h3></div>
            <div class="col-sm-12">
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div>
                @endif
            </div>


</div>
@endsection
