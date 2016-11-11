<div class="form-group {{ $errors->has('display_name') ? 'has-error' : ''  }}">
    {!! Form::label('display_name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('display_name'))
            <p class="help-block">
                {{ $errors->first('display_name') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description (Option)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>