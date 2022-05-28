@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card w-100">
            <div class="card-header">
                List Users
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($users as $user)
                <li class="list-group-item"><a href="{{ route('profile', ['username' => $user->username]) }}">{{ $user->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
