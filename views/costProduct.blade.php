@extends('parent')

@section('title', 'Product cost')

@section('content')
    <h1>My product cost</h1>
    <table>
        <thead>
        <tr>
            <th>Продукт</th>
            <th>Ціна</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($prices as $product => $price)
            <tr>
                <td>{{ $product }}</td>
                <td>${{ $price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('styles')
    <style>
        h1 {
            padding-top: 250px;
            font-size: 20px;
        }
    </style>
@endsection
