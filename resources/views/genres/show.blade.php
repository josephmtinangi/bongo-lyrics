@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background: #1987F9; color: #fff;">
        <div class="container">
            <h1 class="text-center">{{ $genre->display_name  }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Lyrics</h2>

                @if($genre->songs->count() > 0)

                    @include('lyrics._lyrics', ['lyrics' => $genre->songs])

                @else
                    <h2 class="text-center">This genre has no any songs yet.</h2>
                @endif

            </div>
        </div>
    </div>

@endsection