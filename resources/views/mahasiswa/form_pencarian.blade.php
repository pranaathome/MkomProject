<div id="pencarian">
    {!! Form::open(['url' => 'mahasiswa/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
    <div class="row">
        <div class="col-md-2">
            {!! Form::select('id_dosen', $list_dosen, (! empty($id_dosen) ? $id_dosen : null) , ['id' => 'id_dosen', 'class' => 'form-control', 'placeholder' => '-Dosen-']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::select('prodi', [
                'Program Studi A' => 'Program Studi A',
                'Program Studi B' => 'Program Studi B',
                'Program Studi C' => 'Program Studi C',
                'Program Studi D' => 'Program Studi D',
                'Program Studi E' => 'Program Studi E'
            ], (! empty($prodi) ? $prodi : null) , ['id' => 'prodi', 'class' => 'form-control', 'placeholder' => '-Program Studi-']) !!}
        </div>
        <div class="col-md-8">
            <div class="input-group">
                {!! Form::text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Mahasiswa']) !!}
                <span class="input-group-btn">
                    {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
                </span>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
