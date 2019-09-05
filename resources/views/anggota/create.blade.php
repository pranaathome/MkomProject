@extends('template')

@section('main')
    <div id="dosen">
        <h2>Edit Anggota</h2>
        {!! Form::open(['route' => 'anggota.store']) !!}
            @include('anggota.form', ['submitButtonText' => 'Simpan'])
        {!! Form::close() !!}
    </div>
@stop
