@extends('layouts.app')
@extends('layouts.nav')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="{{ route('jajan.exportExcel') }}" class="btn btn-success">
                            <i class="bi bi-download me-1"></i>Export to Excel
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('jajan.exportPdf') }}" class="btn btn-danger ">
                            <i class="bi bi-download me-1"></i>Export to PDF
                        </a>
                    </li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item">
                        <a href="{{ route('jajan.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Tambahkan Jajanan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3 bg-light">
            <table class="table table-bordered table-hover mb-0 datatable" id="jajanTable">
                <thead>
                    <tr class="text-white"style="background-color: #9E7676">
                        <th>id</th>
                        <th>no</th>
                        <th>Kode jajan</th>
                        <th>Nama jajan</th>
                        <th>Harga jajan</th>
                        <th>Jenis jajan</th>
                        <th>Deskripsi jajan</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="p-1"></div>
     @include('layouts.footer')
@endsection