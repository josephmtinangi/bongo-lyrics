@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background: #0A8B3F; color: #fff;">
        <div class="container">
            <h1>Artists</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 well well-lg">

                @if($artists->count() > 0)
                    @foreach($artists->chunk(4) as $artistsSet)
                        <div class="row">
                            @foreach($artistsSet as $artist)
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <img src="#" alt="">
                                        <div class="caption">
                                            <h3>{{ $artist->name }}</h3>
                                            <p>
                                                <a href="{{ url('artists/' . $artist->id) }}" class="btn btn-link">Songs</a>
                                            </p>
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