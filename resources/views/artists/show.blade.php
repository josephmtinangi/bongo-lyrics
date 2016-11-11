@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">{{ $artist->name  }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Lyrics</h2>

                @if($artist->songs->count() > 0)

                    @include('lyrics._lyrics', ['lyrics' => $artist->songs])

                @else
                    <h2 class="text-center">This artist has no any songs yet.</h2>
                @endif

            </div>
        </div>
    </div>

@endsection