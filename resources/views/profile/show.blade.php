@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>{{ $user->username }}</h1>
        </div>
    </div>
@endsection
