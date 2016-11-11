@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center">Recently Added</h2>


                @include('lyrics._lyrics')

            </div>
        </div>
    </div>

@endsection