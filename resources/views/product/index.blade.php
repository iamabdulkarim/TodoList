@extends('product.layout')

@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb mb-2 mt-2 ">
		<div class=" d-inline mr-4 p-3 border bg-light">
			<h1 class=" d-inline ">Laravel Product list</h1>
		</div>
		<div class="d-inline  p-3 border bg-light ml-4">
			<a class="btn btn-info" href="{{route('create.product')}}">Create New Product</a>
		</div>
	</div>
</div>
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th width="150">Product Name</th>
			<th width="150">Product Code</th>
			<th width="200">Details</th>
			<th width="100">Product Logo</th>
			<th width="280">Action</th>
		</tr>

		@foreach($product as $pro)
		<tr>
			
			<td>{{$pro->product_name}}</td>
			<td>{{$pro->product_code}}</td>
			<td>{{$pro->details}}</td>
			<td><img src="{{URL::to($pro->logo)}}" height="70px;" width="80px;"></td>
			<td>
				<a class="btn btn-info" href="">Show</a>
				<a class="btn btn-primary" href="{{ URL::to('edit/product/'.$pro->id)}}">Edit</a>
				<a class="btn btn-danger" href="{{URL::to('delete/product/'.$pro->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
			</td>
			
		</tr>
		@endforeach
	</table>



@endsection