@extends('layouts.master')

@section('content')
<div class="container">
	<h1>{{ $food['name'] }}</h1>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<img src="{{  asset('img/'.$food['image_url']) }}" alt="image" class="img-fluid img-thumbnail">
		</div><!-- end of col-md-4 -->

		<div class="col-md-8">
			<h2>${{ $food['price'] }}</h2>
      	<h4>{{ $food['description'] }}<h4>

      	<form action="{{ route('cart.store') }}" method="POST">
		      {!! csrf_field() !!}
		      <input type="hidden" name="id" value="{{ $food['id'] }}">
		      <input type="hidden" name="name" value="{{ $food['name'] }}">
		      <input type="hidden" name="price" value="{{ $food['price'] }}">
		      <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
      	</form>			
		</div><!-- end of col-md-8 -->
	</div><!-- end of row -->
</div><!-- end of container -->
@endsection