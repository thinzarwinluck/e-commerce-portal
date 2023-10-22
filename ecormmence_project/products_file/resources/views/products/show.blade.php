@extends('layouts.app')


@section('content')
 
<h3>Product Detail</h3>

    <div class="row" style="display:flex">
        
        <img src="{{ url('public/Image/'.$product->image) }}" alt="image" width="50%">

<div>
    <h5 class="mt-5">Product Name : {{$product->name}}</h5>
    <h5>Product Category : {{$product->category}}</h5>
    <h5>Prize : 550 MMK for each</h5>

</div>
    </div>
@endsection