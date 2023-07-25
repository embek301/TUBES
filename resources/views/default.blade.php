@extends('layouts.app')

@section('content')

     {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ Vite::asset('resources/images/') }}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/images/') }}"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/images/') }}"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

    <section class="section-content">
        <h1 class="text-center p-4">Catalog</h1>
        <div class="container">
             @foreach ($jajan as $jajan)
            <header class="section-heading">
                <h3 class="section-title">{{ $jajan->jenis->name }}</h3>
                <p>{{ $jajan->jenis->description }} </p>
            </header>
            <div class="row">
                <div class="col-6 col-md-3 p-1">
                    <div class="card card-product-grid">
                        <a href="{{ route('jajan.show', ['jajan' => $jajan->id]) }}" class="img-wrap p-2" for="kodeJajan"> <img
                                src="{{ Vite::asset('resources/images/items/deepclean1.jpg') }}"> {{ $jajan->nama_jajan }}</a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title"> Rp.{{ number_format($jajan->price) }}</a>
                        </figcaption>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
{{-- 
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Snacky Basah</h3>
                <p>Snacky Kering adalah jenis jajanan pasar yang bertekstur basah yang empuk dan lembut yang cocok dijadikan jajanan dikala sore hari sambil ngopimu</p>
            </header>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div href="#" class="card card-product-grid bg-black">
                        <a href="#" class="img-wrap p-2"> <img
                                src="{{ Vite::asset('resources/images/items/unyellowing1.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">1</a>
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-6 col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap p-2"> <img
                                src="{{ Vite::asset('resources/images/items/unyellowing2.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="" class="title">2 </a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap p-2"> <img
                                src="{{ Vite::asset('resources/images/items/unyellowing3.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">3</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap p-2"> <img
                                src="{{ Vite::asset('resources/images/items/unyellowing4.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">4</a>
                        </figcaption>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
</html>
