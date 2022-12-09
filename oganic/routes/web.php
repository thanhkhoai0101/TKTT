<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\CategoriesController::class,'index']);

Route::get('/index', function () {
    return view('layouts.index');
});
Route::get('/users/checkout', function () {
    return view('users.checkouts.checkout');
})->name('checkout');

//Route::get('/shops',function (){
//    return view('shops.shop-gird');
//})->name('shops');



Route::prefix('shops')->name('shops.')->group(function (){
    Route::get('/',[ProductsController::class,'index'])->name('index');
    Route::get('/shop-details/{id}',[ProductsController::class,'show'])->name('show');
});
// Route::get('/{cat_id}',[ProductsController::class,'loadCategory'])->name('load-category');


Route::prefix('admin')->name('admin.')->group(function (){
   Route::get('/',function(){
    return view('admin.index');
   })->name('index');
   // lay san pham ban api// du lieu dc return tu productcontroler
   Route::get('/api-ajax',[ProductsController::class,'load']);
   //


   Route::name('product.')->prefix('product')->group(function(){
        Route::get('/', function(){
            return view('admin/Products/index');
        })->name('index');
//add create 
        Route::get('/Create', [ProductsController::class, 'create'])->name('create');
        Route::post('/Create', [ProductsController::class, 'store'])->name('CreateConfirm');
//chuaw xong delete
        Route::delete('/{id}', [ProductsController::class, 'destroy']);
//edit~update
        Route::get('/edit/{id}', [ProductsController::class, 'edit',])->name('edit');
        Route::post('/edit', [ProductsController::class, 'update'])->name('updateConfirm');
   });
});

