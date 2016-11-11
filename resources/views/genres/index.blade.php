@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Genres</h3>
                    </div>
                    <div class="panel-body">
                        @if($genres->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Added</th>
                                        <th>Updated</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($genres as $genre)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $genre->display_name }}</td>
                                            <td>{{ $genre->created_at }}</td>
                                            <td>{{ $genre->updated_at }}</td>
                                            <td><a href="{{ url('genres/' . $genre->id . '/edit') }}">Edit</a></td>
                                            <td>Delete</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="jumbotron">
                                <div class="container">
                                    <h2 class="text-center">
                                        No Genre
                                    </h2>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection