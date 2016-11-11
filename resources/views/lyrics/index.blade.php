@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lyrics</h3>
                    </div>
                    <div class="panel-body">
                        @if($lyrics->count() > 0)
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
                                    @foreach($lyrics as $lyric)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $lyric->titlr }}</td>
                                            <td>{{ $lyric->created_at }}</td>
                                            <td>{{ $lyric->updated_at }}</td>
                                            <td><a href="{{ url('artists/' . $lyric->id . '/edit') }}">Edit</a></td>
                                            <td>
                                                <a data-toggle="modal" href='#{{ $lyric->id }}'>Delete</a>
                                                <div class="modal fade" id="{{ $lyric->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">
                                                                    Delete {{ $lyric->name }}</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete permanently?
                                                                <p>
                                                                    <strong>{{ $lyric->name }}</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ url('artists/'.$lyric->id) }}"
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
                                        No Lyric
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