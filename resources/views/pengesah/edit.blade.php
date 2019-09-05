@extends('template')

@section('main')
    <div id="dosen">
        <h2>Edit Dosen</h2>
        {!! Form::model($ketua, ['method' => 'PATCH', 'action' => ['KetuaController@update', $ketua->id]]) !!}
            @include('ketua.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@stop
