<nav class="navbar navbar-expand-md navbar-light  shadow-xl" style="background-color: #92C874">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @php
                    $currentRouteName = Route::currentRouteName();
                @endphp
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                    style="width: 100px;">
                <div class="collapse navbar-collapse fw-bold" id="navbarSupportedContent">
                    {{-- <hr class="d-md-none text-white-50"> --}}
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                                class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-row flex-wrap">
                        @Auth
                            <li class="nav-item col-2 col-md-auto"><a href="{{ route('jajan.index') }}"
                                    class="nav-link @if ($currentRouteName == 'jajan.index') active @endif">Daftar
                                    Jajan</a>
                            </li>
                        @endauth
                            <li class="nav-item col-2 col-md-auto">
                                <a href="{{ route('company') }}" class="nav-link">Profile Perusahaan</a>
                            </li>
                    </ul>
            </ul>
            <!-- Right Side Of Navbar -->

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest


                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endguest
                @Auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="dropdown-toggle btn btn-outline-dark my-2 ms-md-auto" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i
                                class="bi-person-circle"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}"><i class="bi-person-fill"></i>
                                {{ __('My profile') }}</a>
                            <hr>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i
                                    class="bi bi-lock"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
