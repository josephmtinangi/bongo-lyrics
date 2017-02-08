@extends('layouts.app')

@section('content')

<div class="jumbotron">
	<div class="container text-center">
		<h1>Bongo Lyrics</h1>
		<p>
			Rifle franchise tube shanty town jeans market render-farm construct spook shrine decay sunglasses cardboard fetishism apophenia monofilament ablative. 
		</p>
		<p>
			<a href="{{ url('register') }}" class="btn btn-primary btn-lg">Get Started</a>
		</p>
	</div>
</div>

    <div class="container">
        <div class="recently">
            <h1 class="text-center">Recently Added</h1>

            @include('lyrics._lyrics')

        </div>
    </div>
@endsection
