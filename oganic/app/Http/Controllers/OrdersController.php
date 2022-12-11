<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartItems = \Cart::getContent();

        return view('users.checkouts.checkout',compact('cartItems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order=new Order();
        $data=[
            'OrderDateTime'=>date("m/d/y G.i:s") ,
            'Note'=>$request->note,
            'customerId'=>1,
        ];
        if(isset($request->create_account)){
            return view('register',compact('data'));
        }
        if(session('user') !== null){
            $data['customerId']=session('user')->id;
        }
        $order->OrderDateTime = $data['OrderDateTime'];
        $order->Note = $data['Note'];
        $order->CustomerId = $data['customerId'];
        $order->save();

        $cartItems = \Cart::getContent();
        foreach ($cartItems as $item){
            $orderDetails=new OrderDetail();
            $orderDetails->OrderId = $order->id;
            $orderDetails->ProductId = $item->id;
            $orderDetails->Quantity = $item->quantity;
            $orderDetails->SalePrice = $item->price * $item->quantity;
            $orderDetails->save();
        }

        \Cart::clear();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
