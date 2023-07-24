@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('jajan.update', ['jajan' => $jajan->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <img class="img-fluid bg-success rounded-circle"
                            src="{{ Vite::asset('resources/images/logo.png') }}"alt="image" style="width: 100px;">
                        </i>
                        </i>
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeJajan" class="form-label">Kode Jajan</label>
                            <input class="form-control @error('kodeJajan')is-invalid @enderror" type="text"
                                name="kodeJajan" id="kodeJajan"
                                value="{{ $errors->any() ? old('kodeJajan') : $jajan->kode_jajan }}"
                                placeholder="Masukkan Nama Jajan">
                            @error('kodeJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaJajan" class="form-label">Nama Jajan</label>
                            <input class="form-control @error('namaJajan')is-invalid @enderror" type="text"
                                name="namaJajan" id="namaJajan"
                                value="{{ $errors->any() ? old('namaJajan') : $jajan->nama_jajan }}"
                                placeholder="Masukkan Nama Jajan">
                            @error('namaJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Jajan</label>
                            <input type="number"class="form-control @error('harga') is-invalid @enderror" type="text"
                                name="harga" id="harga" value="{{ $errors->any() ? old('harga') : $jajan->price }}"
                                placeholder="Masukkan Harga Jajan">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsiJajan" class="form-label">Deskripsi Jajan</label>
                            <textarea class="form-control @error('deskripsiJajan') is-invalid @enderror" type="text" name="deskripsiJajan"
                                id="deskripsiJajan" placeholder="Dekripsi jajan"> {{ $errors->any() ? old('deskripsiJajan') : $jajan->description }}</textarea>
                            @error('deskripsiJajan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jenis" class="form-label">Jenis Jajan</label>
                            <select name="jenis" id="jenis" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('jenis');
                                    } else {
                                        $selected = $jajan->jenis_id;
                                    }
                                @endphp
                                @foreach ($jenis as $jenis)
                                    <option value="{{ $jenis->id }}" {{ $selected == $jenis->id ? 'selected' : '' }}>
                                        {{ $jenis->code . ' - ' . $jenis->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jenis')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="img" class="form-label">Gambar Produk</label>
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
                        <div class="col-md-12 mb-3">
                            <input type="file" class="form-control" name="cv" id="cv">
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
