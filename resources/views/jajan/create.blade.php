@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('jajan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <img class="img-fluid bg-success rounded-circle"
                            src="{{ Vite::asset('resources/images/logo.png') }}"alt="image" style="width: 100px;">
                        </i>
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeJajan" class="form-label">Kode Jajan</label>
                            <input class="form-control @error('kodeJajan')is-invalid @enderror" type="text"
                                name="kodeJajan" id="kodeJajan" value="{{ old('kodeJajan') }}"
                                placeholder="Masukkan Nama Jajan">
                            @error('kodeJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaJajan" class="form-label">Nama Jajan</label>
                            <input class="form-control @error('namaJajan')is-invalid @enderror" type="text"
                                name="namaJajan" id="namaJajan" value="{{ old('namaJajan') }}"
                                placeholder="Masukkan Nama Jajan">
                            @error('namaJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Jajan</label>
                            <input type='number' class="form-control @error('harga') is-invalid @enderror" type="text"
                                name="harga" id="harga" value="{{ old('harga') }}"
                                placeholder="Masukkan Harga Jajan">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsiJajan" class="form-label">Deskripsi Jajan</label>
                            <textarea class="form-control @error('deskripsiJajan') is-invalid @enderror" type="text" name="deskripsiJajan"
                                id="deskripsiJajan" value="{{ old('deskripsiJajan') }}" placeholder="Dekripsi jajan"></textarea>
                            @error('deskripsiJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jenis" class="form-label">Jenis Jajan</label>
                            <select name="jenis" id="jenis" class="form-select">
                                @foreach ($jenis as $jenis)
                                    <option value="{{ $jenis->id }}"
                                        {{ old('jenis') == $jenis->id ? 'selected' : '' }}>
                                        {{ $jenis->code . ' - ' . $jenis->name }}</option>
                                @endforeach
                            </select>
                            @error('jenis')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="img" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('jajan.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@vite('resources/js/app.js')


</html>
