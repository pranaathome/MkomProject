@extends('template')

@section('main')
    <div class="row justify-content-center">
        <div class="card col-md-8 m-3">
            <div class="card-body">
                <h4 class="card-title">Tambah Mahasiswa</h4>
                {!! Form::open(['route' => 'user.index']) !!}
                    @include('user.form', ['submitButtonText' => 'Simpan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
