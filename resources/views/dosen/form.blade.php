@if (isset($mhs))
    {!! Form::hidden('id', $mhs->id) !!}
@endif

@if (isset($dosen))
    {!! Form::hidden('id', $dosen->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nip') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nip', 'NIP', ['class' => 'control-label']) !!}
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nip'))
            <span class="help-block"> {{ $errors->first('nip') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama'))
            <span class="help-block"> {{ $errors->first('nama') }} </span>
        @endif
    </div>


<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
