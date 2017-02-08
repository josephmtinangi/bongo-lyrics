@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-genres">
        <div class="container">
            <h1>Genres</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                @if($genres->count() > 0)
                    @foreach($genres->chunk(4) as $genresSet)
                        <div class="row">
                            @foreach($genresSet as $genre)
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <div class="text-center">
                                            <span class="glyphicon glyphicon-flash lyric-icon"></span> 
                                        </div>
                                        <div class="caption">
                                            <div class="text-center">
                                                <h3>{{ $genre->display_name }}</h3>
                                                <a href="{{ url('genres/' . $genre->id) }}"><span class="glyphicon glyphicon-music"></span> Songs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    No Genre
                @endif

            </div>
        </div>
    </div>

@endsection