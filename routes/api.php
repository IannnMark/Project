<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/customer/all', ['uses' => 'CustomerController@getCustomerAll', 'as' => 'customer.getcustomerall']);
// Route::get('/customer/all', ['uses' => [CustomerController::class, 'getCustomerAll'], 'as' => 'customer.getcustomerall']);

Route::get('products/all', [ProductController::class, 'getProduct'])->name('product.all');


        Route::resource('customer', 'CustomerController');
        route::view('/customer-index', 'Customer.Index');


