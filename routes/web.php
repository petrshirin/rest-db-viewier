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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/position', [\App\Http\Controllers\PositionController::class, "get"])->name("Positions");
Route::get('/position/form/{objId?}', [\App\Http\Controllers\PositionController::class, "getForm"])->name("Positions");
Route::post('/position/form/{objId?}', [\App\Http\Controllers\PositionController::class, "save"])->name("Positions");
Route::get('/position/delete/{objId}', [\App\Http\Controllers\PositionController::class, "delete"])->name("Positions");

Route::get('/restaurantinfo', [\App\Http\Controllers\RestaurantInfoController::class, "get"])->name("RestaurantInfo");
Route::get('/restaurantinfo/form/{objId?}', [\App\Http\Controllers\RestaurantInfoController::class, "getForm"])->name("RestaurantInfo");
Route::post('/restaurantinfo/form/{objId?}', [\App\Http\Controllers\RestaurantInfoController::class, "save"])->name("RestaurantInfo");
Route::get('/restaurantinfo/delete/{objId}', [\App\Http\Controllers\RestaurantInfoController::class, "delete"])->name("RestaurantInfo");

Route::get('/restaurant', [\App\Http\Controllers\RestaurantController::class, "get"])->name("Restaurant");
Route::get('/restaurant/form/{objId?}', [\App\Http\Controllers\RestaurantController::class, "getForm"])->name("Restaurant");
Route::post('/restaurant/form/{objId?}', [\App\Http\Controllers\RestaurantController::class, "save"])->name("Restaurant");
Route::get('/restaurant/delete/{objId}', [\App\Http\Controllers\RestaurantController::class, "delete"])->name("Restaurant");

Route::get('/staff', [\App\Http\Controllers\StaffController::class, "get"])->name("Staff");
Route::get('/staff/form/{objId?}', [\App\Http\Controllers\StaffController::class, "getForm"])->name("Staff");
Route::post('/staff/form/{objId?}', [\App\Http\Controllers\StaffController::class, "save"])->name("Staff");
Route::get('/staff/delete/{objId}', [\App\Http\Controllers\StaffController::class, "delete"])->name("Staff");

Route::get('/table', [\App\Http\Controllers\TableController::class, "get"])->name("Table");
Route::get('/table/form/{objId?}', [\App\Http\Controllers\TableController::class, "getForm"])->name("Table");
Route::post('/table/form/{objId?}', [\App\Http\Controllers\TableController::class, "save"])->name("Table");
Route::get('/table/delete/{objId}', [\App\Http\Controllers\TableController::class, "delete"])->name("Table");

Route::get('/waiter', [\App\Http\Controllers\WaiterController::class, "get"])->name("Waiter");
Route::get('/waiter/form/{objId?}', [\App\Http\Controllers\WaiterController::class, "getForm"])->name("Waiter");
Route::post('/waiter/form/{objId?}', [\App\Http\Controllers\WaiterController::class, "save"])->name("Waiter");
Route::get('/waiter/delete/{objId}', [\App\Http\Controllers\WaiterController::class, "delete"])->name("Waiter");

Route::get('/order', [\App\Http\Controllers\OrderController::class, "get"])->name("Order");
Route::get('/order/form/{objId?}', [\App\Http\Controllers\OrderController::class, "getForm"])->name("Order");
Route::post('/order/form/{objId?}', [\App\Http\Controllers\OrderController::class, "save"])->name("Order");
Route::get('/order/delete/{objId}', [\App\Http\Controllers\OrderController::class, "delete"])->name("Order");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
