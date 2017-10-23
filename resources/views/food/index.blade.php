@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		@foreach($foods as $food)
			<div class="card" style="width: 20rem;">
				<img class="card-img-top img-fluid" src="{{asset('img/'.$food->image_url)}}" alt="Card image cap">
				<div class="card-block">
					<h4 class="card-title">{{$food->name}}</h4>
					<p class="card-text">{{$food->price}}</p>					
				</div>
			</div><!--end of card -->
		@endforeach
	</div><!--end of row -->
</div> <!--end of container -->
@endsection