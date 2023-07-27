    <div class="d-flex">
        <div>
            <a href="{{ route('jajan.show', ['jajan' => $jajan->id]) }}"class="btn btn-outline-light bg-info btn-sm me-2">
                <i class="bi-person-lines-fill"></i>
            </a>
        </div>
        <div>
            <a href="{{ route('jajan.edit', ['jajan' => $jajan->id]) }}"class="btn btn-outline-warning btn-sm me-2">
                <i class="bi-pencil-square"></i>
            </a>
        </div>
        <div>
            <form action="{{ route('jajan.destroy', ['jajan' => $jajan->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 btn-delete"
                    data-name="{{ $jajan->kode_jajan . ' ' . $jajan->nama_jajan }}">
                    <i class="bi-trash"></i>
                </button>
            </form>
        </div>
    </div>
