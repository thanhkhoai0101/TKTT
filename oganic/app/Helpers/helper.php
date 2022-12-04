<?php

use Illuminate\Support\Facades\DB;

function getProductsByCategoryId($cat_Id){
    if (isset($cat_Id)) {
        $products = DB::table('products')->where('categoryId', '=', $cat_Id)->paginate(4);
    }else{
        $products=\App\Models\Product::paginate(12);
    }
    return $products;
}
