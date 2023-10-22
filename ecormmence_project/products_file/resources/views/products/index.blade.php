@extends('layouts.app')


@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            @if($user == 'admin@gmail.com')
            <div class="pull-right">
              
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            
            </div>
            @endif
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container d-flex flex-wrap align-items-center">
    @foreach ($products as $product)
  <div class="m-2 card">
    
    <img src="{{ url('public/Image/'.$product->image) }}" alt="image" width="50%">
  <p>{{$product -> name}}</p>
<div style="display: flex">
  <form action="{{ route('products.destroy',$product->id) }}" method="POST" >
                    <a class="btn btn-light" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-eye"></i></a>

                   @if($user == 'admin@gmail.com')
                    
                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-light"><i class="fa-solid fa-pen-to-square"></i></a>
                    


                    @csrf
                    @method('DELETE')
                   
                    <button type="submit" class="btn btn-light"><i class="fa-solid fa-trash"></i></button>
                   

                    
                </form>

                @else
                    <a class="btn btn-light"  href="{{ url('/showOrder', $product->id) }}"><i class="fa-solid fa-basket-shopping"></i></a>
                    <!-- Button trigger modal -->

<!-- Modal -->

                    @endif

                
</div>
</div>
  
@endforeach
</div>
@endsection

<style>

    
body{
  margin: 5px 0;
}

.card{
  border-radius: 8px;
  border: 1px solid #cccccc;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px;
  box-sizing: border-box;
  width: 200px;
  height: 210px;
  transition: all linear 200ms;
}
.card:hover{
  transform: scale(1.1);
  transition: all linear 200ms;
  z-index: 1;
  box-shadow: 1px 1px 10px rgba(0,0,0,.3);
  cursor: pointer;
}
    </style>