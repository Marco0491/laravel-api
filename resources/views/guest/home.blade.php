<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel Boolpress</title>
    </head>
    <body>
        @if (Route::has('login'))
            <div class="d-flex justify-content-end links mb-5 p-3">
                @auth
                    <a href="{{ route('admin.home') }}">Home</a>
                    <a href="{{ route('admin.posts.index') }}">Post</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="text-center">
            <h1 class="text-uppercase title mb-0">Boolpress</h1>
            @if (Auth::check())
                <p class="fs-3">Ciao {{Auth::user()->name}}</p>
            @endif
        </div>
        <div id="root"></div>
        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
