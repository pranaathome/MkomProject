@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Mahasiswa</h2>
        @include('_partial.flash_message')
        {{-- @include('mahasiswa.form_pencarian') --}}

        @if (!empty($mhs_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mhs_list as $mhs)
                        <tr>
                            <td>{{ $mhs->nama_mhs }}</td>
                            <td>{{ $mhs->nim }}</td>
                            {{-- <td> --}}
                                {{-- @if (Auth::check()) --}}
                                    {{-- <td class="box-button">
                                        <a href=" {{ route('mahasiswa.form_kolokium', $mhs->id) }} " class="btn btn-warning btn-sm">Export PDF</a>
                                    </td> --}}
                                    {{-- <td class="box-button">
                                        <a href=" {{ route('mahasiswa.edit', $mhs->id) }} " class="btn btn-warning btn-sm">Edit</a>
                                    </td> --}}
                                    <td class="box-button">
                                        <a href=" {{ route('mahasiswa.show', $mhs->id) }} " class="btn btn-success btn-sm">Pilih untuk Membuat Surat</a>
                                    </td>
                                    <td class="box-button">
                                        {!! Form::open(['method' => 'DELETE', 'action' => ['MahasiswaController@destroy', $mhs->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                {{-- @endif --}}
                            {{-- </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data mahasiswa.</p>
        @endif
        <div class="table-nav">
            <div class="jumlah-data">
                <strong> Jumlah Mahasiswa: {{ $jumlah_mhs }} </strong>
            </div>
            <div class="paging">
                {{ $mhs_list->links() }}
            </div>
        </div>
        {{-- @if (Auth::check()) --}}
            <div class="tombol-nav">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Buat Surat</a>
            </div>
        {{-- @endif --}}

    </div>
@stop
