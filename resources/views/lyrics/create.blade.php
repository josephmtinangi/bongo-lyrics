@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Submit lyrics</h2>

                <div class="well">
                    {!! Form::open(['url' => 'lyrics', 'class' => 'form-horizontal']) !!}

                    {{ csrf_field() }}

                    @include('lyrics._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@endsection