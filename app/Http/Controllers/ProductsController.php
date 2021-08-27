<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cart;
use Session;

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
}
