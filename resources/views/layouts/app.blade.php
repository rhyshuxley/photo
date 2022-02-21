@extends('layouts.head')
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div class="logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('images/logo/logo.png') }}" alt="Rhys Huxley Logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/about">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gear">{{ __('Gear') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">{{ __('Blog') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="navbar-brand" href="https://www.instagram.com/rhyshuxleyphotography/" target="_break">
                                        <i class="fab fa-lg fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="https://500px.com/p/rhyshuxley" target="_break">
                                        <i class="fab fa-lg fa-500px"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="https://twitter.com/rhyshuxleyphoto" target="_break">
                                        <i class="fab fa-lg fa-twitter"></i>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">{{ __('Profile') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/manage">{{ __('Manage Photos') }}</a>
                                    <a class="dropdown-item" href="/upload">{{ __('Upload Photos') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
