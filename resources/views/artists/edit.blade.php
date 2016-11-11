@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Edit</h2>

                <div class="well">

                    {!! Form::model($artist, ['route' => ['artists.update', $artist->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    {{ csrf_field() }}

                    @include('artists._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>

@endsection