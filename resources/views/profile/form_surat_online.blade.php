@if (isset($mhs))
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

{{-- @if ($errors->any())
    <div class="form-group {{ $errors->has('id_anggota') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('id_anggota', 'Anggota', ['class' => 'control-label']) !!}
        @if (count($list_anggota) > 0)
            {!! Form::select('id_anggota', $list_anggota, null, ['class' => 'form-control',
                'id' => 'id_anggota',
                'placeholder' => 'Pilih Dosen']) !!}
        @else
        <p>Tidak ada pilihan dosen, silahkan pilih dahulu.</p>
        @endif

        @if ($errors->has('id_anggota'))
        <span class="help-block"> {{ $errors->first('id_anggota') }} </span>
        @endif
    </div> --}}

{{-- <h3>Data untuk Mengunduh Surat</h3> --}}

@if ($errors->any())
    <div class="form-group {{ $errors->has('hari') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('hari', 'Hari', ['class' => 'control-label']) !!}
        {!! Form::select('hari', [null => 'Pilih Hari'] + [
            'Senin' => 'Senin',
            'Selasa' => 'Selasa',
            'Rabu' => 'Rabu',
            'Kamis' => 'Kamis',
            'Jumat' => 'Jumat',
        ], null, ['class' => 'form-control']) !!}
        @if ($errors->has('hari'))
            <span class="help-block"> {{ $errors->first('hari') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('tanggal', 'Tanggal', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal', !empty($mhs) ? $mhs->tanggal->format('Y-m-d'):null,
            ['class' => 'form-control', 'id' => 'tanggal']) !!}
        @if ($errors->has('tanggal'))
            <span class="help-block"> {{ $errors->first('tanggal') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_mulai') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_mulai', 'Waktu Mulai', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_mulai', null, ['class' => 'form-control', 'id' => 'waktu_mulai']) !!}
        @if ($errors->has('waktu_mulai'))
            <span class="help-block"> {{ $errors->first('waktu_mulai') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('waktu_selesai') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('waktu_selesai', 'Waktu Selesai', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_selesai', null, ['class' => 'form-control', 'id' => 'waktu_selesai']) !!}
        @if ($errors->has('waktu_selesai'))
            <span class="help-block"> {{ $errors->first('waktu_selesai') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('terbit') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('terbit', 'Terbit', ['class' => 'control-label']) !!}
        {!! Form::date('terbit', !empty($mhs) ? $mhs->terbit->format('Y-m-d'):null,
            ['class' => 'form-control', 'id' => 'terbit']) !!}
        @if ($errors->has('terbit'))
            <span class="help-block"> {{ $errors->first('terbit') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tujuan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('tujuan', 'Tujuan', ['class' => 'control-label']) !!}
        {!! Form::textarea('tujuan', null, ['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
        @if ($errors->has('tujuan'))
            <span class="help-block"> {{ $errors->first('tujuan') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('penerima') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('penerima', 'Penerima Surat', ['class' => 'control-label']) !!}
        {!! Form::text('penerima', null, ['class' => 'form-control']) !!}
        @if ($errors->has('penerima'))
            <span class="help-block"> {{ $errors->first('penerima') }} </span>
        @endif
    </div>

{{-- KOLOM TEMPAT DIISI OLEH ADMIN --}}
{{-- @if ($errors->any())
    <div class="form-group {{ $errors->has('tempat') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('tempat', 'Tempat', ['class' => 'control-label']) !!}
        {!! Form::text('tempat', null, ['class' => 'form-control']) !!}
        @if ($errors->has('tempat'))
            <span class="help-block"> {{ $errors->first('tempat') }} </span>
        @endif
    </div> --}}

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
