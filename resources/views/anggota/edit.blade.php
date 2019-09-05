@extends('template')

@section('main')
    <div class="row justify-content-center">
        <div class="card col-md-8 m-3">
            <div class="card-body">
                <h4 class="card-title">Edit Dosen</h4>

                {!! Form::model($dosen, ['method' => 'PATCH', 'action' => ['DosenController@update', $dosen->id]]) !!}
                    @include('dosen.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
