@extends('layouts.app')
@extends('layouts.nav')
@section('content')
    <div class="tentangkami">
        <h1>Tentang Kami</h1>
        <img src="{{ Vite::asset('resources/images/logo.png') }}" style="width:20%">
        <p>Snacky merupakan sebuah website platform yang menyediakan katalog jajanan tradisional indonesia dengan banyak jenis jajanan dari seluruh indonesia. 
            Snacky menyediakakan platform ini guna memperkenalkan jajanan tradisional kepada masyarakat yang belum pernah mencoba. 
            Snacky juga menyediakan jajanan tradisional dengan harga yang terjangkau dan rasa yang nikmat.
        </p>
    </div>
     @include('layouts.footer')
@endsection
