<?php

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
Route::get('shop_carts',function (){
    return view('shops.shopping-cart');
})->name('shop-carts');
Route::get('/{cat_id}',[ProductsController::class,'loadCategory'])->name('load-category');

//
//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::get('/')
//});
// Route::resource('admin',\App\Http\Controllers\admin\AccountsController::class);

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/cc/register',[CustomersController::class,'showRegister'])->name('show-register');
Route::post('/cc/takeregister',[CustomersController::class,'takeRegister'])->name('take-register');

Route::get('/cc/login',[CustomersController::class,'showLogin'])->name('show-login');
Route::post('/cc/takelogin',[CustomersController::class,'takeLogin'])->name('take-login');
Route::get('/cc/logout',[CustomersController::class,'logOut'])->name('logout');
// Route::get('/cc/dashboard',[UserController::class,'dashBoard']);
