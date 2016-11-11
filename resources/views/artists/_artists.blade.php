@if($artists->count() > 0)
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
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->created_at }}</td>
                    <td>{{ $artist->updated_at }}</td>
                    <td><a href="{{ url('artists/' . $artist->id . '/edit') }}">Edit</a></td>
                    <td>
                        <a data-toggle="modal" href='#{{ $artist->id }}'>Delete</a>
                        <div class="modal fade" id="{{ $artist->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">
                                            Delete {{ $artist->name }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete permanently?
                                        <p>
                                            <strong>{{ $artist->name }}</strong>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ url('artists/'.$artist->id) }}"
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
                No Artist
            </h2>
        </div>
    </div>
@endif