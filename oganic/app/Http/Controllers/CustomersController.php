<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{
    /**
     * @param string $username
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    public function show($username)
    {
        $message=null;
        $customer = DB::table('customers')->where('Username',$username)->get();
        return view('users.information.index',['customers'=>$customer,'message'=>$message]);
    }
    public function update(Request $request,$username)
    {
        $customer = DB::table('customers')->where('Username',$username)
            ->update([
                'Name'=>$request->Name,
                'Email'=>$request->Email,
                'Username'=>$request->Username,
                'Password'=>Hash::make($request->Password),
                'Address'=>$request->Address,
                'PhoneNumber'=>$request->PhoneNumber]);
        if ($customer==1){
            $message ='Update successfully';
        }else{
            $message = 'Update fail';
        }
        $customer = DB::table('customers')->where('Username',$username)->get();
        return view('users.information.index',['customers'=>$customer,'message'=>$message]);

    }

    public function showRegister()
    {
        return view('register');
    }
    public function takeRegister(Request $request)
    {
        $request->validate(
            [
                'Name' => 'required',
                'Email' => 'required|email|unique:customers',
                'Username' => 'required',
                'Password' => 'required|min:6|max:100',
                'Address' => 'required',
                'PhoneNumber' => 'required',
            ]
        );
        $customer = new Customer();
        $customer->Name = $request->Name;
        $customer->Email = $request->Email;
        $customer->Username = $request->Username;
        $customer->Password = Hash::make($request->Password);
        $customer->Address = $request->Address;
        $customer->PhoneNumber = $request->PhoneNumber;
        $res = $customer->save();
        if ($res == true) {
            return back()->with('success', 'You have  registered successfully');
        } else {
            return back()->with('fail', 'Some thing wrong');
        }
    }
    public function showLogin()
    {
        return view('login');
    }

    public function takeLogin(Request $request)
    {
        $request->validate(
            [
                'Username' => 'required',
                'Password' => 'required|min:6|max:100',
            ]
        );
        $customer = Customer::where('Username', '=', $request->Username)->first();
        if ($customer) {
            if (Hash::check($request->Password, $customer->Password)) {
                $request->session()->put('loginId',$customer->id);
                return redirect('/');
            } else {
                return back()->with('fail', 'This password is not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }
    // public function dashBoard(){

    //     $categories=DB::table('categories')->get();
    //     return view('index',['categories'=>$categories]);
    // }
    public function logOut(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/cc/login');
        }
    }

}
