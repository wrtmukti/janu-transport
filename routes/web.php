<?php

use Illuminate\Support\Facades\Route;


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


Auth::routes();

Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
// Route::post('/order/form', [App\Http\Controllers\GuestController::class, 'form']);
Route::post('/order/direct', [App\Http\Controllers\GuestController::class, 'direct']);
Route::post('/order/direct/store', [App\Http\Controllers\GuestController::class, 'directStore']);
Route::post('/order/cart', [App\Http\Controllers\GuestController::class, 'cart']);
Route::post('/order/cart/store', [App\Http\Controllers\GuestController::class, 'cartStore']);

Route::get('/tour/{category}', [App\Http\Controllers\GuestController::class, 'tour']);
Route::post('/order/tour', [App\Http\Controllers\GuestController::class, 'tourForm']);
Route::post('/order/tour/store', [App\Http\Controllers\GuestController::class, 'tourStore']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);

    Route::get('/order/vehicle', [App\Http\Controllers\OrderController::class, 'vehicle']);
    Route::get('/order/vehicle/{id}', [App\Http\Controllers\OrderController::class, 'vehicleShow']);
    Route::post('/order/vehicle/{id}', [App\Http\Controllers\OrderController::class, 'vehicleUpdate']);
    Route::post('/order/vehicle/delete/{id}', [App\Http\Controllers\TransactionController::class, 'vehicleDelete']);

    Route::get('/order/tour', [App\Http\Controllers\OrderController::class, 'tour']);
    Route::get('/order/tour/{id}', [App\Http\Controllers\OrderController::class, 'tourShow']);
    Route::post('/order/tour/{id}', [App\Http\Controllers\OrderController::class, 'tourUpdate']);
    Route::post('/order/tour/delete/{id}', [App\Http\Controllers\TransactionController::class, 'tourDelete']);

    Route::get('/transaction/vehicle', [App\Http\Controllers\TransactionController::class, 'vehicle']);
    Route::get('/transaction/tour', [App\Http\Controllers\TransactionController::class, 'tour']);

    Route::get('/vehicle', [App\Http\Controllers\VehicleController::class, 'index']);
    Route::post('/vehicle/package', [App\Http\Controllers\VehicleController::class, 'package']);
    Route::post('/vehicle/packagestore', [App\Http\Controllers\VehicleController::class, 'packageStore']);
    Route::get('/vehicle/create', [App\Http\Controllers\VehicleController::class, 'create']);
    Route::post('/vehicle', [App\Http\Controllers\VehicleController::class, 'store']);
    Route::get('/vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'show']);
    Route::post('/vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'update']);
    Route::delete('/vehicle/delete/{id}', [App\Http\Controllers\VehicleController::class, 'delete']);



    Route::get('/tour', [App\Http\Controllers\TourController::class, 'index']);
    Route::get('/tour/create', [App\Http\Controllers\TourController::class, 'create']);
    Route::post('/tour', [App\Http\Controllers\TourController::class, 'store']);
    Route::get('/tour/{id}', [App\Http\Controllers\TourController::class, 'show']);
    Route::post('/tour/{id}', [App\Http\Controllers\TourController::class, 'update']);
    Route::post('/tour/delete/{id}', [App\Http\Controllers\TourController::class, 'delete']);
});
