<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Session;
use App\Models\Product;
use App\Models\Category;
use DB;
use Validator;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    public function getCart(){
        // $cart_detail = @session()->get('cart_detail');
        // if(count($cart_detail)==0){
        //   return redirect()->route('index');
        // }
        // return view('cart');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleCart($act,$idsp,$qty=0)
    {
        $data = session()->get('cart');
        // print_r($data);die;
        if($act=='add'){
        @$data[$idsp]++;
        }
        if($act=='remove'){
            unset($data[$idsp]);
        }
        if($qty>0){
            $data[$idsp]=$qty;
        }
        $cart_detail=[];
        foreach ($data as $key => $value) {
            $product = DB::table('products')
                        ->select('name','price','images')
                        ->where('id',$key)->first();
            $product->qty = $value;
            $cart_detail[$key]=$product;
            @$cart_detail['total'] += $value*$product->price;
        }
        session()->put('cart',$data);
        session()->put('cart_detail',$cart_detail);
        return redirect()->route('product_cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    
}
