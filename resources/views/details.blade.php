@extends('master')
@section("content")


<div class="container-fluid details-products">
  <div class="row">
    <div class="col-sm-6 ">
      <img class="img-details" src="{{ $products ['gallery'] }}" alt="">
      
    </div>
    <div class="col-sm-6">
      <a href="/">Go Back</a>
      <h2>Name : {{ $products['name'] }}</h2>
      <h3>Price : {{ $products['price'] }}</h3>
      <h4>Category : {{ $products['category'] }}</h4>
      <h4>Description : {{ $products['description'] }}</h4>
      <br><br>
      <form action="/add to cart" method="post">
        @csrf
        <input type="hidden" name="products_id" value="{{ $products['id'] }}">
      
      <button class="btn btn-primary">Add To Cart</button>
    </form>
      <br><br>
      <button class="btn btn-success">Buy Now</button>
      <br><br>

    </div>
  </div> 
	
	
</div>


@endsection

