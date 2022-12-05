<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $table='';
    public function __construct()
    {
        $this->table=new Product();
    }


//    public function loadCategory($cat_id){
//        $products_Type = DB::select('select * from products where categoryId='.$cat_id);
//        return view('index',['products_type'=>$products_Type]);
//    }

    public function index(Request $request)
    {

        if($request['cat_id']==""){
            $products=Product::paginate(12);
        }else{
            $products=Product::where('categoryId','=',$request['cat_id'])->paginate(12);
        }
        $productsSale = DB::select('select * from products where categoryId=1');

        $categories=DB::table('categories')->get();


        return view('shops.shop-gird',[
            'products'=>$products,
            'productsSale'=>$productsSale,
            'categories'=>$categories,
        ]);
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
        $product = DB::table('products')->find($id);
        return view('shops.shop-details',['product'=>$product]);
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
