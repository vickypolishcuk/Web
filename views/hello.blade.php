
@extends('parent')

@section('title', 'Hello')

@section('content')
    <h1>Welcome on Hello!</h1>
    @if($message!=NULL)
        <h2>{{$message}}</h2>
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
