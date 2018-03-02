<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset("img/favicon2.png") }}"/>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<div id="app">
    @auth
        <nav class="navbar fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div id="menu" class="btn-group">
                    <button type="button" class="hamburger hamburger--slider" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>

                    </button>
                    <div class="dropdown-menu dropdown-menu-right text-right text-white">
                        <a href="" class="dropdown-item">New Post</a>
                        <a href="" class="dropdown-item">Manage Posts</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </nav>
    @endauth

    <main>
        @yield('content')
        @include('partials.footer')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
