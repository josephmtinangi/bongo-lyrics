@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::model($lyric, ['route' => ['lyrics.update', $lyric->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

                {{ csrf_field() }}

                @include('lyrics._form')

                <div class="col-sm-10 col-sm-offset-2">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection