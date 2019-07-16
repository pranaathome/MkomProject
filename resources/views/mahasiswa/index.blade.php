@extends('template')

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card m-3">
                <div class="card-header">MAHASISWA Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>MAHASISWA</strong>

                    {{-- <form action="{{ url('mahasiswa/create') }}">
                        <input class="btn btn-primary float-right" type="submit" value="Isi Form">
                    </form> --}}

                    @if (!empty($mhs_list))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Program Studi</th>
                                    <th>No. Telp</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mhs_list as $mhs)
                                    <tr>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->nama }}</td>
                                        <td>{{ $mhs->prodi }}</td>
                                        <td>{{ $mhs->no_telp }}</td>
                                        <td>{{ $mhs->judul }}</td>
                                        <td>
                                            <a href=" {{ route('mahasiswa.show', $mhs->id) }} " class="btn btn-success btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Tidak ada data mahasiswa.</p>
                    @endif

                    <div class="table-nav">
                        <div class="float-right">
                            Pagination
                        </div>
                        <div class="float-left">
                            <strong> Jumlah Mahasiswa : {{ $jumlah_mhs }} </strong>
                        </div>
                    </div>
                </div>

                <div class="bottom-nav">
                    <a href=" {{ route('mahasiswa.create') }} " class="btn btn-primary">Tambah Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
@stop
