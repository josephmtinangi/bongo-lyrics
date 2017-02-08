@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-welcome">
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
	<div class="row">
		<div class="col-sm-8">
			@include('lyrics._lyrics')
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">HOT</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item active">Item 1</a>
						<a href="#" class="list-group-item">Item 2</a>
						<a href="#" class="list-group-item">Item 3</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
