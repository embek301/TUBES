@extends('layouts.app')
@section('content')
    <div class="kontainer">
        <div class="form_content">
            <a href="{{ URL::PREVIOUS() }}"> <i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            <img src="{{ Vite::asset('resources/images/logo.png') }}"alt="image">
        </div>
        <div class="show_form">
            <h1>{{ $pageTitle }}</h1>
            <form>
                <img src="{{ Vite::asset('storage/app/public/files/' . $jajan->encrypted_filename) }}">
                <div class="p-1"></div>
                <label for="namaJajan" class="form-label">Nama Jajan</label>
                <h5>{{ $jajan->nama_jajan }}</h5>
                <label for="harga" class="form-label">Harga Jajan</label>
                <h5>Rp.{{ number_format($jajan->price) }}</h5>
                <label for="deskripsiJajan" class="form-label">Deskripsi Jajan</label>
                <h5>{{ $jajan->description }}</h5>
            </form>
        </div>
    @endsection
    {{-- @vite('resources/js/app.js') --}}

    </html>
