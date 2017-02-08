@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-artists">
        <div class="container">
            <h1>Artists</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                @if($artists->count() > 0)
                    @foreach($artists->chunk(4) as $artistsSet)
                        <div class="row">
                            @foreach($artistsSet as $artist)
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <div class="text-center">
                                            <span class="glyphicon glyphicon-user lyric-icon"></span>
                                        </div>
                                        <div class="caption">
                                            <div class="text-center">
                                                <h3>{{ $artist->name }}</h3>
                                                <a href="{{ url('artists/' . $artist->id) }}"><span class="glyphicon glyphicon-music"></span> Songs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    No Artist
                @endif

            </div>
        </div>
    </div>

@endsection