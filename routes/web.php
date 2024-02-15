<?php

use Illuminate\Support\Facades\Route;
use App\Models\Query;
use App\Http\Controllers\QueryController;
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
    return view('home');
});

Route::get('services/home-cleaning', function () {
    return view('home-cleaning');
});
Route::get('services/home-painting', function () {
    return view('home-painting');
});
Route::get('services/pest-control', function () {
    return view('pest-control');
});
Route::get('services/marble-polish', function () {
    return view('marble-polish');
});
Route::get('services/appliances-repairing', function () {
    return view('appliances-repairing');
});
Route::get('services/bathroom-cleaning', function () {
    return view('bathroom-cleaning');
});

Route::post('/storetoquery', [QueryController::class,'store']);