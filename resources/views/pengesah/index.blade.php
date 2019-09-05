@extends('template')

@section('main')
    <div class="dosen">
        <h2>Ketua Program Studi</h2>

            {{-- @include('_partial.flash_message') --}}

            {{-- @if (!empty($ketua_list))
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="3" style="text-align: center;">Daftar Dosen</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        {{-- @foreach ($ketua_list as $ketua) --}}
                        {{-- <tr>
                            <tr>
                                <th>No</th>
                                <th>Ketua</th>
                                <th>NIP</th>
                            </tr>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ "$ketua->nama_ketua" }}</td>
                                <td>{{ "$ketua->nip_ketua" }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <th>Anggota</th>
                                <td>{{ !empty($ketua->anggota->nama_anggota) ? $ketua->anggota->nama_anggota : '-'  }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <th>NIP</th>
                                <td>{{ !empty($ketua->anggota->nip_anggota) ? $ketua->anggota->nip_anggota : '-'  }}</td>
                            </tr>
                            <tr>
                            </tr>
                        </tr>
                        <td colspan="2" class="box-button" style="border-top: 0">
                            <a href=" {{ route('ketua.edit', $ketua->id) }} " class="btn btn-warning btn-sm">Edit</a>
                        </td> --}}
                        {{-- <td class="box-button">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['DosenController@destroy', $dosen->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td> --}}
                        {{-- @endforeach --}}
                    {{-- </tbody>
                </table>
            @else
                <p>Tidak ada data dosen.</p>
            @endif

            <div class="table-nav">
                <div class="jumlah-data">
                    <strong> Jumlah Dosen : {{ "$jumlah_ketua" }} </strong>
                </div>
                <div class="paging">
                    {{ "$ketua_list->links()" }}
                </div>
            </div>
        </div>

        <div class="tombol-nav">
            <a href=" {{ route('ketua.create') }} " class="btn btn-primary">Tambah Ketua</a>
            <a href=" {{ url('anggota/create') }} " class="btn btn-primary">Tambah Anggota</a>
        </div> --}}
    </div>
@stop
