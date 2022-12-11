<?php

use App\Http\Controllers\AccountController;
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



Route::prefix('admin')->name('admin.')->group(function (){
   Route::get('/',function(){
    return view('admin.index');
   })->name('index');
   // lay san pham ban api// du lieu dc return tu productcontroler
   Route::get('/api-ajax',[ProductsController::class,'load']);

   Route::name('product.')->prefix('product')->group(function(){
        Route::get('/', function(){
            return view('admin/Products/index');
        })->name('index');
        Route::get('/Create', [ProductsController::class, 'create'])->name('create');
        Route::post('/Create', [ProductsController::class, 'store'])->name('CreateConfirm');
        Route::get('/edit/{id}', [ProductsController::class, 'edit',])->name('edit');
        Route::post('/edit', [ProductsController::class, 'update'])->name('updateConfirm');
   });
   Route::get('/api',[AccountController::class,'loadTK']);

   Route::name('account.')->prefix('account')->group(function(){

        Route::get('/', function(){
            return view('admin/Accounts/index');
        })->name('index');

        Route::get('/Create', [AccountController::class, 'create'])->name('create');
        Route::post('/Create', [AccountController::class, 'store'])->name('CreateConfirm');
        Route::get('/edit/{id}', [AccountController::class, 'edit',])->name('edit');
        Route::post('/edit', [AccountController::class, 'update'])->name('updateConfirm');
       
   });
});
Route::get('deleteproduct', [ProductsController::class,'deleteProduct']);
Route::get('deleteitem', [AccountController::class,'destroy']);
