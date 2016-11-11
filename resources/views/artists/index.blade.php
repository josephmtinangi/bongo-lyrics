@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Artists</h3>
                    </div>
                    <div class="panel-body">

                        @include('artists._artists')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection