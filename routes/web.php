<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Master\ItemController;
use App\Http\Controllers\Admin\Master\LocationController;
use App\Http\Controllers\Admin\Master\RfidController;

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

/*
|--------------------------------------------------------------------------
| API Doc
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doc/rfid', function () {
    return view('doc.rfid');
});

Route::get('/doc/item', function () {
    return view('doc.item');
});

Route::get('/doc/auth', function () {
    return view('doc.auth');
});

/*
|--------------------------------------------------------------------------
| Admin Frontend
|--------------------------------------------------------------------------
*/

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified']);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::resource('/dashboard', DashboardController::class, ['as' => 'admin']);
        Route::resource('/rfid', RfidController::class, ['as' => 'admin']);
        Route::resource('/item', ItemController::class, ['as' => 'admin']);
        Route::resource('/location', LocationController::class, ['as' => 'admin']);
    });
});
