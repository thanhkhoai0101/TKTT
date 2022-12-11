<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
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
            return back()->with('success', 'You have  registered successfuly');
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
        $employees = Employee::where('Username', '=', $request->Username)->where('Status', '=', '1')->first();

        if ($customer || $employees) {
            if ( $customer&&Hash::check($request->Password, $customer->Password)) {
                $request->session()->put('loginId', $customer->id);
                return redirect('/');
            } else if ($employees &&$request->Password == $employees->Password) {
                $request->session()->put('loginId', $employees->id);
                return redirect('/cc/register');
            } else {
                return back()->with('fail', 'This password is not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

        // if(auth()->attempt(array('Username'=>$request->Username,'Password'=>$request->Password))){

        // }
    }

    public function logOut()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/cc/login');
        }
    }
    public  function productListAjax()
    {
        $product = Product::select('Name')->where('Status', '1')->get();
        $data = [];
        foreach ($product as $item) {
            $data[] = $item['Name'];
        }
        return $data;
    }
    public function searchAjax(Request $request)
    {
        $searchProduct = $request->product_name;
        if ($searchProduct != " ") {
            $product = Product::where('Name', 'LIKE', '%' . $searchProduct . '%')->first();
            if ($product) {
                return redirect('shops/'.$product->CategoryId.'/'.$searchProduct);
            }
            else{
                return redirect()->back()->with('status','No product matches your search');
            }
        } else {
            return redirect()->back();
        }
    }
}
