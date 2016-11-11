@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">Lyrics</div>

                    <div class="panel-body">

                        @if($lyrics->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Added</th>
                                        <th>Updated</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($lyrics as $lyric)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $lyric->title }}</td>
                                            <td>{{ $lyric->created_at }}</td>
                                            <td>{{ $lyric->updated_at }}</td>
                                            <td><a href="{{ url('genres/' . $lyric->id . '/edit') }}">Edit</a></td>
                                            <td>
                                                <a data-toggle="modal" href='#{{ $lyric->id }}'>Delete</a>
                                                <div class="modal fade" id="{{ $lyric->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">
                                                                    Delete {{ $lyric->title }}</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete permanently?
                                                                <p>
                                                                    <strong>{{ $lyric->title }}</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ url('genres/'.$lyric->id) }}"
                                                                      method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}

                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cancel
                                                                    </button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="jumbotron">
                                <div class="container">
                                    <h2 class="text-center">
                                        No Lyrics
                                    </h2>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('lyrics/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Genres</div>

                    <div class="panel-body">

                        @include('genres._genres')

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('genres/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Artists</div>

                    <div class="panel-body">

                        @include('artists._artists')

                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('artists/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
