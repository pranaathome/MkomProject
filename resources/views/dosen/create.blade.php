@extends('template')

@section('main')
    <div class="row justify-content-center">
        <div class="card col-md-8 m-3">
            <div class="card-body">
                <h4 class="card-title">Edit Mahasiswa</h4>
                {!! Form::open(['route' => 'mahasiswa.store']) !!}
                    @include('mahasiswa.form', ['submitButtonText' => 'Simpan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
