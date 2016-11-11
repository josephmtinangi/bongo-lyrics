@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background: #00A9B2; color: #fff;">
        <div class="container">
            <h1>Genres</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 well well-lg">

                @if($genres->count() > 0)
                    @foreach($genres->chunk(4) as $genresSet)
                        <div class="row">
                            @foreach($genresSet as $genre)
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <img src="#" alt="">
                                        <div class="caption">
                                            <h3>{{ $genre->display_name }}</h3>
                                            <p>
                                                <a href="{{ url('genres/' . $genre->id) }}" class="btn btn-primary">Songs</a>
                                            </p>
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