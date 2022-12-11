<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $table='';
    public function __construct()
    {
        $this->table=new Customer();
    }
    public function index()
    {
        //
    }
    public function loadTK(){
        $account = DB::table('customers')->select('id','Name','Address','PhoneNumber','Email')->get();
        return $account;
    }
///for

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Accounts.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       DB::table('customers')->insert([
        "Name"=>$request->name,
        "Address"=>$request->Address,
        "PhoneNumber"=>$request->PhoneNumber,
        "Email"=>$request->Email,
    ]);
       return redirect()->route('admin.account.index');
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
        $stock =Customer::find($id);
        return view('admin.Accounts.Edit',['account'=>$stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('customers')->where('id',$_POST['id'])->update([

            "Name"=>$request->Name,
            "Address"=>$request->Address,
            "PhoneNumber"=>$request->PhoneNumber,
            "Email"=>$request->Email,
        ]);
           return redirect()->route('admin.account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // //lấy id khi post dữ liệu qua DB::table xóa đi customers có id đó
         $id=$_GET['id'];
      
        DB::table('customers')->where('id',$id)->delete();
        // sau khi xóa thì load dữ liệu mới 
        $coustomernew = DB::table('customers')->get();
        return $coustomernew;
        
    }
}
