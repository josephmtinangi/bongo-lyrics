@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(['url' => 'artists', 'class' => 'form-horizontal']) !!}

                {{ csrf_field() }}

                @include('artists._form')

                <div class="col-sm-10 col-sm-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection