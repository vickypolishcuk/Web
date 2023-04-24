
@extends('parent')

@section('title', 'Product')

@section('content')
    <h1>My product</h1>
    <ul>
        @foreach ($product as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection

@section('styles')
    <style>
        h1 {
            padding-top: 250px;
            font-size: 20px;
        }
    </style>
@endsection

