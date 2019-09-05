@extends('template')

@section('main')
    <div class="dosen">
        <h2>Ketua Pembimbing</h2>

            @include('_partial.flash_message')

            @if (!empty($ketua_list))
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ketua</th>
                            <th>NIP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ketua_list as $ketua)
                            <tr>
                                <td>{{ $ketua->nama_ketua }}</td>
                                <td>{{ $ketua->nip_ketua }}</td>
                                {{-- <td class="box-button">
                                    <a href=" {{ route('dosen.edit', $dosen->id) }} " class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td class="box-button">
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['DosenController@destroy', $dosen->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Tidak ada data dosen.</p>
            @endif

            <div class="table-nav">
                <div class="jumlah-data">
                    <strong> Jumlah Dosen : {{ $jumlah_ketua }} </strong>
                </div>
                <div class="paging">
                    {{ $ketua_list->links() }}
                </div>
            </div>
        </div>

        <div class="tombol-nav">
            <a href=" {{ route('ketua.create') }} " class="btn btn-primary">Tambah Dosen</a>
        </div>
    </div>
@stop
