@extends('master')
@section("content")


<div class=" custom-products">
  <div class="col-sm-3">
    <a href="#">Filter Products</a>
  </div>
  <div class="col-sm-3">
    <div class="trending-wrapper">
  <h3>Search Results</h3>

    @foreach( $products as $item)
    <div class="searched-item "> 
    <a href="details/{{ $item['id'] }}">
      <img src="{{$item['gallery']}}" class="trending-item">
      <div class="">
        <h4>Product Name: {{  $item['name'] }}</h4>
         <h5>Product Description: {{ $item['description'] }}</h5>
         <h5>Price : {{ $item['price'] }}</h5>

      </div>
    </a>
    </div>

    @endforeach
  
</div>

  </div>
	
</div>


@endsection

 