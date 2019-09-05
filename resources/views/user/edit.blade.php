@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Edit Form Online</h2>

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', Auth::user()->id]]) !!}
            @include('user.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}

    </div>
@stop
