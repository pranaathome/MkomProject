@if (isset($user))
    {!! Form::hidden('id', Auth::user()->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_mhs') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nama_mhs', 'Nama', ['class' => 'control-label']) !!}
        {!! Form::text('nama_mhs', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_mhs'))
            <span class="help-block"> {{ $errors->first('nama_mhs') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nim') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nim', 'NIM', ['class' => 'control-label']) !!}
        {!! Form::text('nim', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nim'))
            <span class="help-block"> {{ $errors->first('nim') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('prodi') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('prodi', 'Program Studi', ['class' => 'control-label']) !!}
        {!! Form::select('prodi', [null => 'Pilih Program Studi'] + [
            'Program Studi A' => 'Program Studi A',
            'Program Studi B' => 'Program Studi B',
            'Program Studi C' => 'Program Studi C',
            'Program Studi D' => 'Program Studi D',
            'Program Studi E' => 'Program Studi E'
        ], null, ['class' => 'form-control']) !!}
        @if ($errors->has('prodi'))
            <span class="help-block"> {{ $errors->first('prodi') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('no_telp', 'No. Telp', ['class' => 'control-label']) !!}
        {!! Form::text('no_telp', null, ['class' => 'form-control']) !!}
        @if ($errors->has('no_telp'))
            <span class="help-block"> {{ $errors->first('no_telp') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('judul') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('judul', 'Judul', ['class' => 'control-label']) !!}
        {!! Form::text('judul', null, ['class' => 'form-control']) !!}
        @if ($errors->has('judul'))
            <span class="help-block"> {{ $errors->first('judul') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_ketua') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('id_ketua', 'Ketua', ['class' => 'control-label']) !!}
        @if (count($list_ketua) > 0)
            {!! Form::select('id_ketua', $list_ketua, null, ['class' => 'form-control',
                'id' => 'id_ketua',
                'placeholder' => 'Pilih Dosen']) !!}
        @else
        <p>Tidak ada pilihan dosen, silahkan pilih dahulu.</p>
        @endif

        @if ($errors->has('id_ketua'))
        <span class="help-block"> {{ $errors->first('id_ketua') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('hari_kolo') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('hari_kolo', 'Hari Kolokium', ['class' => 'control-label']) !!}
        {!! Form::select('hari_kolo', [null => 'Pilih Hari'] + [
            'Senin' => 'Senin',
            'Selasa' => 'Selasa',
            'Rabu' => 'Rabu',
            'Kamis' => 'Kamis',
            'Jumat' => 'Jumat',
        ], null, ['class' => 'form-control']) !!}
        @if ($errors->has('hari_kolo'))
            <span class="help-block"> {{ $errors->first('hari_kolo') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('hari_sidang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('hari_sidang', 'Hari Sidang', ['class' => 'control-label']) !!}
        {!! Form::select('hari_sidang', [null => 'Pilih Hari'] + [
            'Senin' => 'Senin',
            'Selasa' => 'Selasa',
            'Rabu' => 'Rabu',
            'Kamis' => 'Kamis',
            'Jumat' => 'Jumat',
        ], null, ['class' => 'form-control']) !!}
        @if ($errors->has('hari_sidang'))
            <span class="help-block"> {{ $errors->first('hari_sidang') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tanggal_kolo') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('tanggal_kolo', 'Tanggal Kolokium', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_kolo', null,
            ['class' => 'form-control', 'id' => 'tanggal_kolo']) !!}
        @if ($errors->has('tanggal_kolo'))
            <span class="help-block"> {{ $errors->first('tanggal_kolo') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tanggal_sidang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('tanggal_sidang', 'Tanggal Sidang', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_sidang', null,
            ['class' => 'form-control', 'id' => 'tanggal_sidang']) !!}
        @if ($errors->has('tanggal_sidang'))
            <span class="help-block"> {{ $errors->first('tanggal_sidang') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_mulai_kolo') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_mulai_kolo', 'Waktu Mulai Kolokium', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_mulai_kolo', null, ['class' => 'form-control', 'id' => 'waktu_mulai_kolo']) !!}
        @if ($errors->has('waktu_mulai_kolo'))
            <span class="help-block"> {{ $errors->first('waktu_mulai_kolo') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_selesai_kolo') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_selesai_kolo', 'Waktu Selesai Kolokium', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_selesai_kolo', null, ['class' => 'form-control', 'id' => 'waktu_selesai_kolo']) !!}
        @if ($errors->has('waktu_selesai_kolo'))
            <span class="help-block"> {{ $errors->first('waktu_selesai_kolo') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_mulai_sidang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_mulai_sidang', 'Waktu Mulai Sidang', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_mulai_sidang', null, ['class' => 'form-control', 'id' => 'waktu_mulai_sidang']) !!}
        @if ($errors->has('waktu_mulai_sidang'))
            <span class="help-block"> {{ $errors->first('waktu_mulai_sidang') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_selesai_sidang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_selesai_sidang', 'Waktu Selesai Sidang', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_selesai_sidang', null, ['class' => 'form-control', 'id' => 'waktu_selesai_sidang']) !!}
        @if ($errors->has('waktu_selesai_sidang'))
            <span class="help-block"> {{ $errors->first('waktu_selesai_sidang') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('terbit_penelitian') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('terbit_penelitian', 'Tanggal Terbit Surat Permohonan Data', ['class' => 'control-label']) !!}
        {!! Form::date('terbit_penelitian', null,
            ['class' => 'form-control', 'id' => 'terbit_penelitian']) !!}
        @if ($errors->has('terbit_penelitian'))
            <span class="help-block"> {{ $errors->first('terbit_penelitian') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('terbit_kolo') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('terbit_kolo', 'Tanggal Terbit Surat Undangan Kolokium', ['class' => 'control-label']) !!}
        {!! Form::date('terbit_kolo', null,
            ['class' => 'form-control', 'id' => 'terbit_kolo']) !!}
        @if ($errors->has('terbit_kolo'))
            <span class="help-block"> {{ $errors->first('terbit_kolo') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('penerima') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('penerima', 'Penerima Surat Permohonan Data', ['class' => 'control-label']) !!}
    {!! Form::text('penerima', null, ['class' => 'form-control']) !!}
    @if ($errors->has('penerima'))
        <span class="help-block"> {{ $errors->first('penerima') }} </span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tujuan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('tujuan', 'Maksud Surat Permohonan Data', ['class' => 'control-label']) !!}
    {!! Form::textarea('tujuan', null, ['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
    @if ($errors->has('tujuan'))
        <span class="help-block"> {{ $errors->first('tujuan') }} </span>
    @endif
</div>

{{-- KOLOM TEMPAT DIISI OLEH ADMIN --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('tempat') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('tempat', 'Tempat (admin)', ['class' => 'control-label']) !!}
    {!! Form::text('tempat', null, ['class' => 'form-control']) !!}
    @if ($errors->has('tempat'))
        <span class="help-block"> {{ $errors->first('tempat') }} </span>
    @endif
</div>

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
