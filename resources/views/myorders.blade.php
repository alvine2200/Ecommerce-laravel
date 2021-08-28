@extends('master')
@section("content")


<div class=" custom-products">
  <div class="col-sm-10">
    <div class="trending-wrapper">
        <h3>My Orders</h3><br>

       
 
    @foreach( $orders as $item)
    <div class=" row cart-list-divider searched-item "> 
      <div class="col-sm-3">
        <a href="details/{{ $item->id }}">
      <img src="{{$item->gallery}}" class="trending-item">
      
      </a>
        
      </div>
        <div class="col-sm-5">
          <div class="">
            <h4>Products Name: {{ $item->name }}</h4>
            <h5>Delivery Status : {{ $item->status }}</h5>
            <h5>Payment Status : {{ $item->payment_status }}</h5>
            <h5>Payment Method : {{ $item->payment_method }}</h5>
          </div>
        
        </div>          
    </div>

    @endforeach

  </div>

  </div>
	
</div>


@endsection

 