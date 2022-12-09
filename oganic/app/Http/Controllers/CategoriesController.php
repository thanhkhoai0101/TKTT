<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $table = '';

    public function __construct()
    {
        $this->table = new Category();
    }

    public function index(Request $request)
    {
        $cat=Category::paginate(4);
        $products=getProductsByCategoryId($request['cat_id']);
        $categories = DB::table('categories')->get();
        if (Session::has('loginId')){
            $data = Customer::where('id', '=', Session::get('loginId'))->first();
            return view('index', compact('categories', 'data','products','cat'));
        }
        else{
            return view('index', compact('categories','products','cat'));
        }

        $categories=DB::table('categories')->get();
        $category=Category::paginate(4);

        $product=getProductsByCategoryId($request['cat_id']);

        return view('index',['categories'=>$categories,'cat'=>$category,'products'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
