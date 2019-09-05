@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Detail Mahasiswa</h2>
        <table class="table table-striped">
            <thead>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Nomor Telepon</th>
                <th>Judul</th>
                <th>Dosen</th>
            </thead>
            <tbody>
                <td>{{ $mhs->nama_mhs }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->no_telp }}</td>
                <td>{{ $mhs->judul }}</td>
                <td>{{ $mhs->dosen['nama_dosen'] }}</td>
            </tbody>
        </table>

        <div class="button-box">
            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-success btn-sm">Edit Form Online untuk Mengunduh Surat</a>
        </div>

        <h2>Daftar Surat</h2>
        <table class="table table-striped">
            <thead>
                <th>Jenis Surat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td>Formulir Kolokium</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('mahasiswa.form_kolokium', $mhs->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Formulir Sidang</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('mahasiswa.form_sidang', $mhs->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Permohonan Data</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('mahasiswa.permohonan_data', $mhs->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Undangan Kolokium</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('mahasiswa.undangan_kolokium', $mhs->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
