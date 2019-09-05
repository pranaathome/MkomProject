@if (isset($ketua))
    {!! Form::hidden('id', $ketua->id) !!}
@endif

<h3>Data Ketua</h3>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_ketua') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nama_ketua', 'Nama', ['class' => 'control-label']) !!}
        {!! Form::text('nama_ketua', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_ketua'))
            <span class="help-block"> {{ $errors->first('nama_ketua') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nip_ketua') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nip_ketua', 'NIP', ['class' => 'control-label']) !!}
        {!! Form::text('nip_ketua', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nip_ketua'))
            <span class="help-block"> {{ $errors->first('nip_ketua') }} </span>
        @endif
    </div>

{{-- <h3>Data Anggota</h3>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_anggota') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nama_anggota', 'Nama', ['class' => 'control-label']) !!}
        {!! Form::text('nama_anggota', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_anggota'))
            <span class="help-block"> {{ $errors->first('nama_anggota') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nip_anggota') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nip_anggota', 'NIP', ['class' => 'control-label']) !!}
        {!! Form::text('nip_anggota', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nip_anggota'))
            <span class="help-block"> {{ $errors->first('nip_anggota') }} </span>
        @endif
    </div> --}}

@if ($errors->any())
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
    </div>

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
