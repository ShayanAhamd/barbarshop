<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

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

Route::post('/login',[ClientController::class,'login'])->name('login');


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/services/{customer_id}',[HomeController::class,'services'])->name('services');
Route::get('/customerDetail/{customer_id}',[HomeController::class,'customerDetail'])->name('customerDetail');
Route::get('/subcategories',[HomeController::class,'subcategories'])->name('subcategories');
Route::get('/customers',[HomeController::class,'customers'])->name('customers');
Route::get('/customer-search',[HomeController::class,'customersSearch'])->name('customer.search');
Route::get('/products',[ProductController::class,'products'])->name('products');
Route::get('add-to-cart', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::post('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::post('update-quantity', [ProductController::class, 'updatequantity'])->name('update.quantity');
Route::post('discount-product', [ProductController::class, 'adddiscount'])->name('discount.product');
Route::post('add-notes', [ProductController::class, 'addnotes'])->name('add.notes');
Route::get('remove-from-cart', [ProductController::class, 'remove'])->name('delete.cart.item');
Route::get('destory-all-cart-items', [ProductController::class, 'destorycart'])->name('destory.all.cart.items');
Route::post('/place-order',[ProductController::class,'placeorder'])->name('order');
Route::get('view-order/{id}', [HomeController::class, 'orderDetail']);

Route::get('/logout',[HomeController::class,'Logout'])->name('logout');


