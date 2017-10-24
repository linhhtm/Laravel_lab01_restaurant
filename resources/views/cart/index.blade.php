@extends('layouts.master')

@section('content')
<div class="container">
	<p><h1>Your Cart</h1></p>
	<hr>

	@include('partials.message')

	@if (Cart::content()->count() > 0)
		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="table-image">Image</th>
					<th>Food</th>
					<th>Quantity</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbdy>
				@foreach (Cart::content() as $item)
					<tr>
						<td class="table-image"><img src="{{ asset('img/'.$item->model->image_url) }}" alt="food" class="img-fluid cart-image"></td>
						<td>{{ $item->model->name }}</td>
						<td>
							<select class="quantity" data-id="{{ $item->rowId }}">
                        <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                        <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                        <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                        <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                        <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                     </select>
						</td>
						<td>{{ $item->subtotal }} VNĐ</td>
						<td>
							<form action="{{ route('cart.destroy', [$item->rowId]) }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                     </form>
						</td>
					</tr>
				@endforeach
				<tr>					
					<td colspan="3" style="text-align: right">SubTotal</td>
					<td colspan="2">{{ Cart::instance('default')->subtotal() }} VNĐ</td>
				</tr>

				<tr>					
					<td colspan="3" style="text-align: right">Tax</td>
					<td colspan="2">{{ Cart::instance('default')->tax() }} VNĐ</td>
				</tr>

				<tr>					
					<td colspan="3" style="text-align: right">Total</td>
					<td colspan="2">{{ Cart::total() }} VNĐ</td>
				</tr>
				
			</tbody>
		</table>
		<a href="{{ route('home') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
		<a href="#" class="btn btn-success btn-lg">Proceed to Checkout</a>&nbsp;

		<div style="float:right">
         <form action="{{ url('/emptyCart') }}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
         </form>
      </div>

	@else
	<h3>You have no items in your shopping cart</h3>
	<a href="{{ route('home') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
	@endif 
</div>
@endsection