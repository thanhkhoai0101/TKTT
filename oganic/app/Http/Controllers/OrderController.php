<?php

namespace App\Http\Controllers;

use App\Models\Orther;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function show($username)
    {
        $message=null;
        $order = DB::table('orders')->leftjoin('customers', 'orders.id', '=', 'customers.id')->where('customers.Username',$username)->get();
        return view('users.buyHistory.index',['orders'=>$order,'message'=>$message]);
    }
}