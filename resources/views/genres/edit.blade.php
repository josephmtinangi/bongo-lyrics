@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Edit genre</h2>

                <div class="well">
                    {!! Form::model($genre, ['route' => ['genres.update', $genre->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    {{ csrf_field() }}

                    @include('genres._form')

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