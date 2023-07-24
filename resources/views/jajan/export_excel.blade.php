<table class="table table-bordered table-hover mb-0 datatable" id="jajanTable">
    <thead>
        <tr class="text-white"style="background-color: #9E7676">
            <th>no</th>
            <th>Kode jajan</th>
            <th>Nama jajan</th>
            <th>Harga jajan</th>
            <th>Jenis jajan</th>
            <th>Deskripsi jajan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jajan as $index => $jajan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $jajan->kode_jajan }}</td>
                <td>{{ $jajan->nama_jajan }}</td>
                <td>Rp.{{ number_format($jajan->price) }}</td>
                <td>{{ $jajan->jenis->name }}</td>
                <td>{{ $jajan->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
