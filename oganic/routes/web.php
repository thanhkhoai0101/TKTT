<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\UserController;
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

Route::get('/', [CategoriesController::class,'index'])->name('home');
//Route::get('/', [CategoriesController::class,'show'])->name('categories.show');

//Route::get('/index/{?id}', function () {
//    return view('index');
//});
Route::get('/users/checkout',[\App\Http\Controllers\UserController::class,'checkout'])->name('checkout');

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
   Route::get('/api-ajax',[ProductsController::class,'load']);
   //





Route::get('/{cat_id}',[ProductsController::class,'loadCategory'])->name('load-category');
   Route::name('product.')->prefix('product')->group(function(){
        Route::get('/', function(){
            return view('admin/Products/index');
        })->name('index');

        Route::get('/Create', [ProductsController::class, 'create'])->name('create');
        Route::post('/Create', [ProductsController::class, 'store'])->name('CreateConfirm');
        Route::get('/edit/{id}', [ProductsController::class, 'edit',])->name('edit');
        Route::post('/edit', [ProductsController::class, 'update'])->name('updateConfirm');

//add create
        Route::get('/Create', [AdminProductsController::class, 'create'])->name('create');
        Route::post('/Create', [AdminProductsController::class, 'store'])->name('CreateConfirm');
//chuaw xong delete
        Route::delete('/{id}', [AdminProductsController::class, 'destroy']);
//edit~update
        Route::get('/edit/{id}', [AdminProductsController::class, 'edit',])->name('edit');
        Route::post('/edit', [AdminProductsController::class, 'update'])->name('updateConfirm');

   });
   Route::get('/api',[AccountController::class,'loadTK']);

Route::get('/cc/register',[CustomersController::class,'showRegister'])->name('show-register');
Route::post('/cc/takeregister',[CustomersController::class,'takeRegister'])->name('take-register');

Route::get('/cc/login',[CustomersController::class,'showLogin'])->name('show-login');
Route::post('/cc/takelogin',[CustomersController::class,'takeLogin'])->name('take-login');
Route::get('/cc/logout',[CustomersController::class,'logOut'])->name('logout');
Route::get('/cc/product/list',[ProductsController::class,'productListAjax'])->name('cc/product/list');
//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::get('/')
//});
Route::resource('admin',\App\Http\Controllers\admin\AccountsController::class);
Route::resource('orders',\App\Http\Controllers\OrdersController::class);

Route::get('/cc/register',[UserController::class,'showRegister'])->name('show-register');
Route::post('/cc/takeregister',[UserController::class,'takeRegister'])->name('take-register');

Route::get('/cc/login',[UserController::class,'showLogin'])->name('show-login');
Route::post('/cc/takelogin',[UserController::class,'takeLogin'])->name('take-login');
Route::get('/cc/logout',[UserController::class,'logOut'])->name('logout');
// Route::get('/cc/dashboard',[UserController::class,'dashBoard']);

Route::get('/cc/product/list',[UserController::class,'productListAjax'])->name('cc/product/list');
Route::post('/cc/searchAjax',[UserController::class,'searchAjax'])->name('searchAjax');
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
