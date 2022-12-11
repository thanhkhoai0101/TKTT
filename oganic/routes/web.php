<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
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

Route::get('/', [CategoriesController::class,'index'])->name('home');
//Route::get('/', [CategoriesController::class,'show'])->name('categories.show');

//Route::get('/index/{?id}', function () {
//    return view('index');
//});
Route::get('/users/checkout', function () {
    return view('users.checkouts.checkout');
})->name('checkout');

Route::prefix('customers')->name('customer.')->group(function(){
    Route::get('/{username}',[CustomersController::class,'show'])->name('show');
    Route::post('/{username}',[CustomersController::class,'update'])->name('update');
});

//Route::get('/shops',function (){
//    return view('shops.shop-gird');
//})->name('shops');



Route::prefix('shops')->name('shops.')->group(function (){
    Route::get('/',[ProductsController::class,'index'])->name('index');
    Route::get('/shop-details/{id}',[ProductsController::class,'show'])->name('show');
});
// Route::get('/{cat_id}',[ProductsController::class,'loadCategory'])->name('load-category');

//Carts

Route::prefix('cart')->name('cart.')->group(function (){
    Route::get('/',[CartsController::class,'index'])->name('index');
    Route::post('/add',[CartsController::class,'addToCart'])->name('add');
    Route::post('/remote',[CartsController::class,'remove'])->name('remove');
    Route::post('/clear',[CartsController::class,'clear'])->name('clear');
    Route::post('/',[CartsController::class,'updateCart'])->name('update-cart');
});
Route::prefix('admin')->name('admin.')->group(function (){
   Route::get('/',function(){
    return view('admin.index');
   })->name('index');
   // lay san pham ban api// du lieu dc return tu productcontroler
   Route::get('/api-ajax',[AdminProductsController::class,'load']);
   //





Route::get('/{cat_id}',[ProductsController::class,'loadCategory'])->name('load-category');
   Route::name('product.')->prefix('product')->group(function(){
        Route::get('/', function(){
            return view('admin/Products/index');
        })->name('index');
//add create
        Route::get('/Create', [AdminProductsController::class, 'create'])->name('create');
        Route::post('/Create', [AdminProductsController::class, 'store'])->name('CreateConfirm');
//chuaw xong delete
        Route::delete('/{id}', [AdminProductsController::class, 'destroy']);
//edit~update
        Route::get('/edit/{id}', [AdminProductsController::class, 'edit',])->name('edit');
        Route::post('/edit', [AdminProductsController::class, 'update'])->name('updateConfirm');
   });
});

//
//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::get('/')
//});
Route::resource('admin',\App\Http\Controllers\admin\AccountsController::class);
