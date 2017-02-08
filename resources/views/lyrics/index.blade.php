@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-lyrics">
	<div class="container">
		<h1>Recently added</h1>
	</div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                @include('lyrics._lyrics')

            </div>
        </div>
    </div>

@endsection