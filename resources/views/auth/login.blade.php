@extends('layouts.app')

<body 
    style="
    background-image: url('{{ Vite::asset('resources/images/background.png') }}');
    background-size: cover;
    background-position: center;
    color:#000">
    @section('content')
        <div class="container-sm my-5" style="">
            <div class="row justify-content-center">
                <div class="p-5  rounded-3 col-lg-4 " style="width: 25rem;background-color: #c77136">
                    <div class="mb-3 text-center">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                            style="width: 100px;">
                        <h4> <strong>Snacky</strong> </h4>
                        <h5>login dulu yuk!</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <input id="email" type="email" for="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your Email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input id="password" type="password" for='password'
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter Your Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                            class="bi-arrow-left-circle me-2"></i>
                                        Kembali</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-outline-light btn-lg mt-3 "style="background-color: #92C874"><i
                                            class="bi bi-box-arrow-in-right"></i>
                                        {{ __('Login') }}</button>
                                </div>
                            </div>
                            {{-- <div class="mb-3 text-center">
                                <div class="mt-1 pt-4">
                                    <h5> Belum punya akun? </h5>
                                    <h6><a href="{{ route('register') }}"
                                            class=" link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            style=";color:#fdd782"> Registrasi dulu yuk ! </a></h6>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
    </body>
@endsection
