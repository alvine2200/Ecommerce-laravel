<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\order;

class ProductsController extends Controller
{
    function index()

    {
        $data=Products::all();

        return view('products',['products'=>$data]);
    }

    function details($id)
    {
        $data=Products::find($id);
        return view('details',['products'=>$data]);
    }

    function search(Request $request)
    {
         $data=Products::where('name','like','%'.$request->input('query' ).'%')->get();
         return view('search',['products'=>$data]);
    }

    function addToCart(Request $request)

    {
        if($request->session()->has('user'))
        {
             $cart=new cart;
             $cart->users_id=$request->session()->get('user')['id'];
             $cart->products_id=$request->products_id;
             $cart->save();

             return redirect('/');

         }
        else{
            return redirect('/login');
        }
        
    }

    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return cart::where('users_id',$userId)->count();
    }


    function cartlist()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.products_id','=','products.id')
        ->where('cart.users_id', $userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('/cartlist');
    }

    function ordernow()
    {
         $userId=Session::get('user')['id'];
        $total=$products=DB::table('cart')
        ->join('products','cart.products_id','=','products.id')
        ->where('cart.users_id', $userId)
        
        ->sum('products.price');
 
        return view('ordernow',['total'=>$total]);
    
    }

    function orderplacement(Request $request)
    {
        $userId=Session::get('user')['id'];
        $allcart=cart::where('users_id',$userId)->get();
        foreach($allcart as $cart)
        {
            $order=new order;
            $order->products_id=$cart['products_id'];
            $order->users_id=$cart['users_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();

            cart::where('users_id',$userId)->delete();


        }

         $request->input();
        return redirect('/');
    }

    function myorders()
    {

        $userId=Session::get('user')['id'];
        $orders=$products=DB::table('orders')
        ->join('products','orders.products_id','=','products.id')
        ->where('orders.users_id', $userId)
        
        ->get();
            
        return view('myorders',['orders'=>$orders]);
        
    }

}
