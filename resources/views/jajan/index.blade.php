@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="{{ route('jajan.exportExcel') }}" class="btn btn-outline-success">
                            <i class="bi bi-download me-1"></i>Export to Excel
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('jajan.exportPdf') }}" class="btn btn-outline-danger">
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
        <div class="table-responsive border p-3 rounded-3">
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
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $("#jajanTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/getJajan",
                columns: [
                    { data: "id", name: "id", visible: false },
                    { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
                    { data: "kode_jajan", name: "kode_jajan" },
                    { data: "nama_jajan", name: "nama_jajan" },
                    { data: "price", name: "price" },
                    { data: "jenis.name", name: "jenis.name" },
                    { data: "description", name: "description" },
                    { data: "action", name: "action", orderable: false, searchable: false },
                ],
                order: [[0, "desc"]],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });
            $(".datatable").on("click", ".btn-delete", function (e) {
                e.preventDefault();

                var form = $(this).closest("form");
                var name = $(this).data("name");

                Swal.fire({
                    title: "Apakah anda yakin untuk menghapus\n" + name + "?",
                    text: "Anda tidak bisa mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "bg-primary",
                    confirmButtonText: "Iya!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    

            
    </script>
@endpush
