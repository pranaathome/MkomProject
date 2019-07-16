@extends('template')

@section('main')
    <div class="row justify-content-center">
        <div class="card col-md-8 m-3">
            <form class="form-horizontal" action="{{ url('mahasiswa') }}" method="POST">
            @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Mahasiswa</h4>
                    <div class="form-group">
                        <label for="nim" class="control-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="prodi" class="control-label">Program Studi</label>
                        <select name="prodi" class="custom-select">
                            <option selected>Pilih Program Studi Anda</option>
                            <option value="Program Studi A">Program Studi A</option>
                            <option value="Program Studi B">Program Studi B</option>
                            <option value="Program Studi C">Program Studi C</option>
                            <option value="Program Studi D">Program Studi D</option>
                            <option value="Program Studi E">Program Studi E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_telp" class="control-label">No. Telp</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="No. Telp">
                    </div>
                    <div class="form-group">
                        <label for="judul" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
            </form>
        </div>
    </div>
@stop
