
@extends('parent')

@section('title', 'Hello')

@section('content')
    <div>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
@endsection

@section('styles')
    <style>
        main div {
            padding-top: 250px;
            font-size: 20px;
        }
    </style>
@endsection
