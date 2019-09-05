@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Pengisian Form Online</h2>

        {!! Form::open(['route' => 'mahasiswa.store']) !!}
            @include('mahasiswa.form', ['submitButtonText' => 'Simpan'])
        {!! Form::close() !!}

        {{-- {!! Form::open(['route' => 'mahasiswa.store']) !!}
            @include('mahasiswa.form', ['submitButtonText' => 'Simpan'])
        {!! Form::close() !!} --}}
    </div>
@stop
