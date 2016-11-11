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
            <div class="col-sm-6 col-sm-offset-3">
                <article class="text-center">
                    {{ $lyric->lyrics }}
                </article>

                <div class="comments">
                    <h2>Comments</h2>
                </div>
            </div>
        </div>
    </div>

@endsection