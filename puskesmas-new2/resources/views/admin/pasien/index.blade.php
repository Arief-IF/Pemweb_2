<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Data Pasien</h3>

        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-primary"> + Tambah Pasien </a>
        <table class ="table table-bordered">
            <tr class = "table-success">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tmp. Lahir</th>
                <th>Tgl. lahir</th>
                <th>Jenis Kelamin</th>
                <th>E-mail</th>
                <th>Alamat</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
            </tr>

            @foreach ( $list_pasien as $pasien )
                <tr>
                    <td>{{ $pasien->id }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->tmp_lahir}}</td>
                    <td>{{ $pasien->tgl_lahir}}</td>
                    <td>{{ $pasien->gender}}</td>
                    <td>{{ $pasien->email}}</td>
                    <td>{{ $pasien->alamat}}</td>
                    <td>{{ $pasien->kecamatan_nama }}</td>
                    <td>
                        <a href="{{ url('dashboard/pasien/show', $pasien->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('dashboard/pasien/edit', $pasien->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{ url('dashboard/pasien/destroy', $pasien->id) }}" method="POST" class="d-inline">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </x-slot>
</x-layout>