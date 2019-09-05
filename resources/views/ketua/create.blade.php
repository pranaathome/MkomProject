@extends('template')

@section('main')
    <div id="dosen">
        <h2>Tambah Dosen</h2>
            {!! Form::open(['route' => 'ketua.store']) !!}
                @include('ketua.form', ['submitButtonText' => 'Simpan'])
            {!! Form::close() !!}
    </div>
@stop
