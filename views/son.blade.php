@extends('parent')

@section('title', 'Home Page')

@section('content')
    <p>Це контент наслідуваного шаблону</p>
@endsection

@section('styles')
    <style>
        main p {
            padding-top: 250px;
        }

        p {
            font-size: 20px;
        }
    </style>
@endsection
