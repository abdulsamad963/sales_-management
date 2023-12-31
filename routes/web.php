<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\PurchasesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/customers',CustomerController::class);
Route::resource('/purchasess',PurchasesController::class);
Route::post('customers/{id}/purchases', 'PurchaseController@store')->name('customers.purchases.store');

Route::get('/back', function () {
    return view('welcome');
});
