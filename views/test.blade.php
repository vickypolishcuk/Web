
@extends('parent')

@section('title', 'Hello')

@section('content')
    <h1>Welcome, {{ $name }}!</h1>

    @if(count($tasks) > 0)
        <h2>Your tasks:</h2>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    @else
        <p>You have no tasks yet.</p>
    @endif
@endsection

@section('styles')
    <style>
        h1 {
            padding-top: 250px;
            font-size: 20px;
        }
    </style>
@endsection

