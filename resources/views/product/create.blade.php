@extends('product.layout')

@section('content')
<div class="row justify-content-between mt-3 p-2">
	
		<div class=" col-md-4 ">
			<h1>Add New Product</h1>
		</div>
		<div class="col-md-4">
			<a class="btn btn-dark col-sm-6" href="{{route('product.index')}}"> Back </a>
		</div>
	
	
</div>
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row row-cols-2">
	    <div class="col form-group">
	    	<strong>product name</strong>
	      <input type="text" name="product_name" class="form-control">
	    </div>
	    <div class="col form-group">
	    	<strong>Product Code</strong>
	      <input type="text" name="product_code" class="form-control" >
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
	      <label for="exampleFormControlTextarea1">Example textarea</label>
	      <textarea name="details" class="form-control" placeholder="Details" rows="3"></textarea>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
	      <strong>Product Logo</strong>
	      <input type="file" name="logo">
	    </div>
     	<div class="col-xs-12 col-sm-12 col-md-12 form-group">
	      <button type="submit" class="btn btn-dark">Submit</button>
	    </div>
  	</div>
  
  
  
  
</form>
@endsection