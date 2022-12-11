<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnCallback;

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
//form index trong phan san pham products
    public function load(){
        $product = DB::table('products as p')
        ->select('p.Id','p.Name','p.Description','c.Name as cateName','p.SalePrice','p.Weight','p.StockQuantity','p.Avatar')
        ->join('categories as c','c.id','=','p.CategoryId')->get();
        return $product;
    }
///form index trong phan san pham products end
    
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tra ve view them san pham
        return view('admin.Products.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
       DB::table('products')->insert([
        "Name"=>$request->name,
        "Description"=>$request->Description,
        "SalePrice"=>$request->SalePrice,
        "Weight"=>$request->Weight,
        "StockQuantity"=>$request->StockQuantity,
        "CategoryId"=>$request->CategoryId,
        "Avatar"=>$request->Avatar,
    ]);
       return redirect()->route('admin.product.index');
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
        $arr = explode('["',$product->Images);
        $arr=explode('"]',$arr[1]);
        $arr=explode(',"',$arr[0]);
        $arr=explode('", "',$arr[0]);
        $images=$arr;

        return view('shops.shop-details',['product'=>$product,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $stock =Product::find($id);
     return view('admin.Products.Edit',['product'=>$stock]);
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

        DB::table('products')->where('id',$_POST['id'])->update([
            "Name"=>$request->name,
            "Description"=>$request->Description,
            "SalePrice"=>$request->SalePrice,
            "Weight"=>$request->Weight,
            "StockQuantity"=>$request->StockQuantity,
            "CategoryId"=>$request->CategoryId,
            "Avatar"=>$request->Avatar,
        ]);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route('admin.product.index'); 
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
}
