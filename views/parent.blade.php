<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
        @section('styles')
        @show
        <style>
            main {
                height: 550px;
            }
        </style>
    </head>
    <body>
        <header>
            <div>Це header батьківського класу</div>
            <div>
                <a href="/">Welcome (/)</a>
                <a href="/about">/about</a>
                <a href="/test">/test</a>
                <a href="/hello">/hello</a>
                <a href="/newUser">/newUser</a>
                <a href=/newStudent>/newStudent</a>
                <a href=/parent>/parent</a>
                <a href=/son>/son</a>
                <a href=/product>/product</a>
                <a href=/costProduct>/costProduct</a>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div>Це footer батьківського класу</div>
        </footer>
    </body>
</html>
