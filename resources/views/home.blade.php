@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">Lyrics</div>

                    <div class="panel-body">

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('lyrics/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Genres</div>

                    <div class="panel-body">

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('genres/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Artists</div>

                    <div class="panel-body">

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('artists/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
