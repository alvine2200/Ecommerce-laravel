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
          <form action="">
              <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Enter Your Address"></textarea>
              </div>
              <div class="form-group">
                <label for="pwd">Payment Method:</label><br><br>
                <input type="radio" name="Payment"><span>Online Payment</span><br><br>
                <input type="radio" name="Payment"><span>Payment On Delivery</span><br><br>
                <input type="radio" name="Payment"><span>Mpesa</span><br><br>

              </div>
              <button type="submit" class="btn btn-success">Order Now</button>
            </form>
          
        </div>
          

  </div>
</div>


@endsection

 