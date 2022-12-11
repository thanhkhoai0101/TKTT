<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartsController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('shops.shopping-cart', compact('cartItems'));
    }
    public function addToCart(Request $request){
       $product = Product::find($request['id']);
        $data=[
            'id'=>$product->id,
            'name'=>$product->Name,
            'price'=>$product->SalePrice,
            'quantity'=>$request->quantity,
            'attributes'=>[
                'weight'=>$product->Weight,
                'image'=>$product->Avatar,
            ]
        ];
        \Cart::add($data);

        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->back();
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->back();
    }
    public function clear(){
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->back();
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' =>$request->quantity,
                ],

            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.index');
    }
}
