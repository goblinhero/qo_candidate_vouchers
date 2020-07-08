<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('orders')->group(function () {
    Route::get('','Order\GetOrdersController@handle');
    Route::post('','Order\CreateOrderController@handle');
    Route::patch('{order}','Order\UpdateOrderController@handle');
    Route::delete('{order}','Order\DeleteOrderController@handle');
    Route::get('{order}','Order\GetOrderController@handle');
});

Route::prefix('vouchers')->group(function () {
    Route::get('','Voucher\GetVouchersController@handle');
    Route::post('','Voucher\CreateVoucherController@handle');
    Route::patch('{voucher}','Voucher\UpdateVoucherController@handle');
    Route::delete('{voucher}','Voucher\DeleteVoucherController@handle');
    Route::get('{voucher}','Voucher\GetVoucherController@handle');
});
