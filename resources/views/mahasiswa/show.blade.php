@extends('template')

@section('main')
    <div class="card m-5">
        <div class="card-body">
            <div id="mhs">
                <h2>Detail Mahasiswa</h2>

                <table class="table table-striped">
                    <tr>
                        <th>NIM</th>
                        <td> {{ $mhs->nim }} </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td> {{ $mhs->nama }} </td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td> {{ $mhs->prodi }} </td>
                    </tr>
                    <tr>
                        <th>No. Telp</th>
                        <td> {{ $mhs->no_telp }} </td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td> {{ $mhs->judul }} </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
