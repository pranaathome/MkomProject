@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Edit Form Online</h2>

        {!! Form::model($mhs, ['method' => 'PATCH', 'action' => ['MahasiswaController@update', $mhs->id]]) !!}
            @include('mahasiswa.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@stop
