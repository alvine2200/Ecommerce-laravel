@extends('master')
@section("content")


<div class=" custom-products">
  <div class="col-sm-10">
    <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{ $total }}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{ $total + 10 }}</td>
        
        </tr>
      </tbody>
    </table>
        <div>
          <form action="/orderplacement" method="post">
            @csrf
              <div class="form-group">
                <textarea type="text" name="address" class="form-control" placeholder="Enter Your Address"></textarea>
              </div>
              <div class="form-group">
                <label for="pwd">Payment Method:</label><br><br>
                <input value="cash" type="radio" name="payment"><span>Online Payment</span><br><br>
                <input value="cash" type="radio" name="payment"><span>Payment On Delivery</span><br><br>
                <input value="cash" type="radio" name="payment"><span>Mpesa</span><br><br>

              </div>
              <button type="submit" class="btn btn-success">Order Now</button>
            </form>
          
        </div>
          

  </div>
</div>


@endsection

 