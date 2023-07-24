@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <img class="img-fluid bg-success rounded-circle"
                        src="{{ Vite::asset('resources/images/logo.png') }}"alt="image" style="width: 100px;">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodeJajan" class="form-label">Kode Jajan</label>
                        <h5>{{ $jajan->kode_jajan }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namaJajan" class="form-label">Nama Jajan</label>
                        <h5>{{ $jajan->nama_jajan }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Harga Jajan</label>
                        <h5>Rp.{{ number_format($jajan->price) }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsiJajan" class="form-label">Deskripsi Jajan</label>
                        <h5>{{ $jajan->description }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Jenis Jajan</label>
                        <h5>{{ $jajan->jenis->name }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="img" class="form-label">gambar</label>
                        @if ($jajan->original_filename)
                            <h5>{{ $jajan->original_filename }}</h5>
                            <a href="{{ route('jajan.downloadFile', ['jajanId' => $jajan->id]) }}"
                                class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-download me-1"></i> Download Gambar
                            </a>
                        @else
                            <h5>Tidak ada</h5>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('jajan.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@vite('resources/js/app.js')


</html>
