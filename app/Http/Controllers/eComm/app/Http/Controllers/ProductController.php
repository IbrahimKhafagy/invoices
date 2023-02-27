<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }

    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    public function add_to_cart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    public function cartlist(){
        
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.id as cart_id')
         ->get();
 
         return view('cartlist', compact('products'));
    
       
    }

    public function removecart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function ordernow(){
        $userId=Session::get('user')['id'];
        $total = $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');

         return view('cartlist', compact('products'));
    }

    public function orderplace(Requset $req){
        $user_id = Session::get('user')['id'];
        $allcart = Cart::where('user_id', $user_id)->get();
        foreach($allcart as $cart)
        {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete(); 
        }
        $req->input();
        return redirect('/');
    }

    public function myorders()
    {
        if(Auth::user()){
            $user_id = Session::get('user')['id'];
            return DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)->get();

            return view('myorders',['orders'=>$orders]);
        }
        else{
            return redirect('/');
        }
    }
}
