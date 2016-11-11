<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''  }}">
    {!! Form::label('first_name', 'First Name (Option)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('first_name'))
            <p class="help-block">
                {{ $errors->first('first_name') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''  }}">
    {!! Form::label('last_name', 'Last Name (Option)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('last_name'))
            <p class="help-block">
                {{ $errors->first('last_name') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
    {!! Form::label('name', 'Popular name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">
                {{ $errors->first('name') }}
            </p>
        @endif
    </div>
</div>