@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="recently">
            <h1 class="text-center">Recently Added</h1>

            @include('lyrics._lyrics')

        </div>
    </div>
@endsection
