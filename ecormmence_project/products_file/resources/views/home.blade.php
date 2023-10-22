@extends('layouts.app')

@section('content')
<div class="container">

<section>
    <div class="container p-t-0 m-t-2 carousel slide" data-ride="carousel" id="postsCarousel">
        <div class="row row-equal m-t-0 carousel-inner">
            <div class="carousel-item active">
            <img  src="{{url('/image/picture2.png')}}" alt="Carousel 1" class="d-block w-100 h-70">
            </div>
            <div class="carousel-item">
            <img  src="{{url('/image/picture.png')}}" alt="Carousel 2" class="d-block w-100 h-70">
</div>

        </div>
    </div>
</section>
<h5 class="mt-2">Beverages</h5>
<div class="container d-flex flex-wrap align-items-center">
@foreach ($beverages as $beveragesa)
  <div class="m-2 card">
    <img src="{{ url('public/Image/'.$beveragesa->image) }}" alt="image" width="50%">
  <p>{{$beveragesa -> name}}</p></div>
  
@endforeach
<div class="m-2 card">
  <a href="{{ route('products.index') }}">
<img src="{{url('/image/1907867-200.png')}}" alt="image" width = "30%" style="margin-left : 42px">
</a>
</div>
</div>


<h5 class="mt-2">Alcoholic Beverages</h5>


<div class="container d-flex flex-wrap align-items-center">
@foreach ($alcoholic as $alcoholics)
  <div class="m-2 card">
    
    <img src="{{ url('public/Image/'.$alcoholics->image) }}" alt="image" width="50%">
  <p>{{$alcoholics -> name}}</p>
</div>
  
@endforeach

<div class="m-2 card">
<a href="{{ route('products.index') }}" >
<img src="{{url('/image/1907867-200.png')}}" alt="image" width = "30%" style="margin-left : 42px">
</a>
</div>
</div>


<h3 class="mt-2">Snacks</h3>
<div class="container d-flex flex-wrap align-items-center">
@foreach ($snacks as $snack)
  <div class="m-2 card">
    
    <img src="{{ url('public/Image/'.$snack->image) }}" alt="image" width="50%">
  <p>{{$snack -> name}}</p>
</div>
  
@endforeach

<div class="m-2 card">
<a href="{{ route('products.index') }}" >
<img src="{{url('/image/1907867-200.png')}}" alt="image" width = "30%" style="margin-left : 42px">
</a>
</div>
  
</div>

<h3 class="mt-2">Chocolate & Sweets</h3>
<div class="container d-flex flex-wrap align-items-center">
@foreach ($chocolate as $chocolates)
  <div class="m-2 card">
    
    <img src="{{ url('public/Image/'.$chocolates->image) }}" alt="image" width="50%">
  <p>{{$chocolates -> name}}</p>
</div>
  
@endforeach

<div class="m-2 card">
<a href="{{ route('products.index') }}" >
<img src="{{url('/image/1907867-200.png')}}" alt="image" width = "30%" style="margin-left : 42px">
</a>
</div>
 
</div>

<h3 class="mt-2">Cooking & Baking</h3>
<div class="container d-flex flex-wrap align-items-center">
@foreach ($cooking as $cookings)
  <div class="m-2 card">
    
    <img src="{{ url('public/Image/'.$cookings->image) }}" alt="image" width="50%">
  <p>{{$cookings -> name}}</p>
</div>
  
@endforeach

<div class="m-2 card">
<a href="{{ route('products.index') }}" >
<img src="{{url('/image/1907867-200.png')}}" alt="image" width = "30%" style="margin-left : 42px">
</a>
</div>
 
</div>


@endsection

<style>

.carousel-control-prev, .carousel-control-next {
    position: absolute;
    top: 300px  !important;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15% !important;
    color: black !important;
    text-align: center;
    transition: opacity 0.15s ease;
    height: 10%;
    opacity: 0.5;
}
.carousel,
.carousel-inner,
.carousel-inner > .item {
    overflow: hidden;
}

/* control image height */
.card-img-top-250 {
    max-height: ;
    overflow: hidden;
}

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
  width: 150px;
  height: 200px;
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

    <script>
      (function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
    $('.carousel .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
      }
      else {
      	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
      }
    });
    
})(jQuery);
      </script>
