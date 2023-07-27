@extends('layouts.app')
@section('content')
    <section class="section-content">
        <h1 class="text-center  p-4 katalog">Catalog</h1>
        <div class="container">
            @foreach ($jenis as $jenis_jajan)
                <header class="section-heading">
                    <h1 class="text-center section-title ">{{ $jenis_jajan->name }}</h1>
                    {{-- <p class="text-center">{{ $jenis_jajan->description }} </p> --}}
                </header>
                <div class="row">
                    @foreach ($snack as $jajan)
                        @if ($jajan->jenis->id === $jenis_jajan->id)
                            <div class="col-6 col-md-4">
                                <div class="card">
                                    <a href="{{ route('show', ['id' => $jajan->id]) }}" class="img-wrap p-2" for="kodeJajan">
                                        <img src="{{ Vite::asset('storage/app/public/files/' . $jajan->encrypted_filename) }}">
                                    </a>
                                    <h5>{{$jajan->nama_jajan}}</h5>
                                    <p>{{$jajan->description}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
    </section>
     @include('layouts.footer')
@endsection
</html>
