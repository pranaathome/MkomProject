@if (isset($anggota))
    {!! Form::hidden('id', $anggota->id) !!}
@endif

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
    </div>

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
