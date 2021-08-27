@extends('master')
@section("content")


<div class=" custom-products">
  <div class="col-sm-10">
    <div class="trending-wrapper">
        <h3>Cart List</h3><br>

        <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
 
    @foreach( $products as $item)
    <div class=" row cart-list-divider searched-item "> 
      <div class="col-sm-3">
        <a href="details/{{ $item->id }}">
      <img src="{{$item->gallery}}" class="trending-item">
      
      </a>
        
      </div>
    <div class="col-sm-5">
        
      <div class="">
        <h4>Product Name: {{  $item->name }}</h4>
         <h5>Product Description: {{ $item->description }}</h5>
         <h5>Price : {{ $item->price }}</h5>
      </div>
    </div>
      <div class="col-sm-3">

          <a href="/removeCart/{{ $item->cart_id }}"><button type="submit" class="btn btn-danger">Remove to Cart</button></a>
        
       
        
      </div>
    
    </div>

    
    @endforeach

  <a class="btn btn-success" href="/ordernow">Order Now</a>

</div>

  </div>
	
</div>


@endsection

 