<x-layout>
    <x-slot name="page_name">Halaman Data Pasien</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tmp. Lahir</th>
                <th>Tgl. lahir</th>
                <th>Jenis Kelamin</th>
                <th>E-mail</th>
                <th>Alamat</th>
                <th>Nama Kecamatan</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr class="table-success">
                <td>1</td>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir}}</td>
                <td>{{ $pasien->tgl_lahir}}</td>
                <td>{{ $pasien->gender}}</td>
                <td>{{ $pasien->email}}</td>
                <td>{{ $pasien->alamat}}</td>
                <td>{{ $pasien->kecamatan_nama }}</td>
                <td>{{ $pasien->created_at }}</td>
                <td>{{ $pasien->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>