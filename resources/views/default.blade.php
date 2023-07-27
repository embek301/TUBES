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
            @foreach ($jenis as $jenis_jajan)
                <header class="section-heading">
                    <h3 class="section-title">{{ $jenis_jajan->name }}</h3>
                    <p>{{ $jenis_jajan->description }} </p>
                </header>
                <div class="row">
                    @foreach ($snack as $jajan)
                        @if ($jajan->jenis->id === $jenis_jajan->id)
                            <div class="col-6 col-md-3 p-1">
                                <div class="card card-product-grid">
                                    <a href="{{ route('show', ['id' => $jajan->id]) }}" class="img-wrap p-2" for="kodeJajan">
                                        <img src="{{ Vite::asset('storage/app/public/files/' . $jajan->encrypted_filename) }}"
                                            style="width: 50%">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title"> Rp.{{ number_format($jajan->price) }}</a>
                                    </figcaption>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
    </section>
@endsection
</html>
