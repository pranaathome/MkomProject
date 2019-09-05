@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Surat Online</h2>
        <table class="table table-striped">
            <thead>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <td>{{ !empty(Auth::user()->nama_mhs) ? Auth::user()->nama_mhs : 'Data belum diisi' }}</td>
                <td>{{ !empty(Auth::user()->nim) ? Auth::user()->nim : 'Data belum diisi' }}</td>
                <td>{{ !empty(Auth::user()->prodi) ? Auth::user()->prodi : 'Data belum diisi' }}</td>
                <td>
                    <a href="{{ route('user.show', Auth::user()->id) }}" class="btn btn-success btn-sm">Rincian Data</a>
                </td>
            </tbody>
        </table>

        <div class="button-box">
            <a href="{{ route('user.edit', Auth::user()->id) }}" class="btn btn-success btn-sm">Edit Form Online untuk Mengunduh Surat</a>
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
                            <a href="{{ route('formulir.form_kolokium', Auth::user()->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Formulir Sidang</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('formulir.form_sidang', Auth::user()->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Permohonan Data</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('formulir.permohonan_data', Auth::user()->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Undangan Kolokium</td>
                    <td>
                        <div class="button-box">
                            <a href="{{ route('formulir.undangan_kolokium', Auth::user()->id) }}" class="btn btn-success btn-sm">Unduh PDF</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
