@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background: #3E6AFF; color: #fff;">
        <div class="container text-center">
            <h1>{{ $lyric->title }}</h1>
            <p>
                <strong>Artist: </strong> {{ $lyric->artist->name }}
            </p>
            <p>
                <strong>Submitted by: </strong> {{ $lyric->user->name }}
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <article class="text-center">
                    {{ $lyric->lyrics }}
                </article>

                <hr>

                <div class="comments">
                    <h2>Comments</h2>

                    {!! Form::open([]) !!}
                        <div class="form-group">
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'You comment here...']) !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <h3>FOLLOW US</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection