@use(App\Models\User)

<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <h3>Data Kelurahan</h3>

        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        @auth
            @if (Auth::user()->role == User::ROLE_ADMIN)
            <a href="{{ url('dashboard/kelurahan/create') }}" class="btn btn-primary"> + Tambah Kelurahan </a>

            @endif
        @endauth
        <table class="table table-bordered">
            <t class="table-success">
                <th>Id</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_kelurahan as $kelurahan)
                <tr>
                    <td>{{ $kelurahan->id }}</td>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>{{ $kelurahan->kecamatan_nama }}</td>
                    <td><a href="{{ url('dashboard/kelurahan/show', $kelurahan->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    @auth
                        @if (Auth::user()->role == User::ROLE_ADMIN)
                        <a href="{{ url('dashboard/kelurahan/edit', $kelurahan->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{ url('dashboard/kelurahan/destroy', $kelurahan->id) }}" method="POST" class="d-inline">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>

                        @endif
                    @endauth
                    </td>
                </tr>
            @endforeach
        </table></x-slot>
</x-layout>