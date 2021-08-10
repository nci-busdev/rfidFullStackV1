<?php

use App\Http\Controllers\Api\V1\ItemController as V1ItemController;
use App\Http\Controllers\Api\V1\PassportController as V1PassportController;
use App\Http\Controllers\Api\V1\RfidController as V1RfidController;
use App\Http\Controllers\Api\V2\ItemController as V2ItemController;
use App\Http\Controllers\Api\V2\PassportController as V2PassportController;
use App\Http\Controllers\Api\V2\RfidController as V2RfidController;
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

/*
|--------------------------------------------------------------------------
| V1
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/register', [V1PassportController::class, 'register']);
Route::post('/v1/login', [V1PassportController::class, 'login']);

Route::resource('/v1/rfid', V1RfidController::class);
Route::get('/v1/rfid/id_rfid/{id_rfid}', [V1RfidController::class, 'showWhereIdRfid']);
Route::resource('/v1/item', V1ItemController::class);

/*
|--------------------------------------------------------------------------
| V2
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/v2/user', function (Request $request) {
    return $request->user();
});

Route::post('/v2/register', [V2PassportController::class, 'register']);
Route::post('/v2/login', [V2PassportController::class, 'login']);

Route::resource('/v2/rfid', V2RfidController::class);
Route::get('/v2/rfid/id_rfid/{id_rfid}', [V2RfidController::class, 'showWhereIdRfid']);
Route::resource('/v2/item', V2ItemController::class);
