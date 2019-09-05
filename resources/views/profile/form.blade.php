@if (isset($user))
    {!! Form::hidden('id', Auth::user()->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('username') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block"> {{ $errors->first('name') }} </span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block"> {{ $errors->first('email') }} </span>
        @endif
    </div>

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
