@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Edit Profile</h2>

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', Auth::user()->id]]) !!}
            @include('profile.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}

    </div>
@stop
