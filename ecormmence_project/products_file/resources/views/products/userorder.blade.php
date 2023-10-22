@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your Order</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Total Product</th>
            <th>Payment Type</th>
            <th>Date</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	       
	        <td>{{ $product->name }}</td>
            <td>{{$product->order}}</td>
            <td>{{($product->type == 0)?'Mobile Payment' : 'Cash On delivery' }}
<td>{{$product->updated_at->format('d/m/Y') }}</td>
	    </tr>
	    @endforeach
    </table>
@endsection