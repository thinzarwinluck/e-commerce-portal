@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Product Order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row" style="display:flex">
        
        <img src="{{ url('public/Image/'.$product->image) }}" alt="image" width="50%">

<div>
    <h5>Product Name : {{$product->name}}</h5>
    <h5>Product Category : {{$product->category}}</h5>
   
    <form action="{{ route('postOrder') }}" method="POST" enctype="multipart/form-data">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Product Count</strong>
		            <input type="number" name="order" class="form-control" placeholder="Product Count">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Choose your Payment Type:</strong>
                    <br>
                    <select name="payment_type" id="myselect">
 <option value="0">Mobile Payment</option>
 <option value="1" selected='selected'>Cash on delivery</option>
</select>
                   
</div>
		    </div>
            <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="category" value="{{ $product->category}}">
    <input type="hidden" name="detail" value="{{ $product->detail}}">
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

</div>
    </div>
@endsection