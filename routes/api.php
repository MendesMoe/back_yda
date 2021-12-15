<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OdetailController;
use App\Http\Controllers\TypeController;


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

Route::resource('/users', UserController::class);

Route::resource('/firms', FirmController::class);

Route::resource('/products', ProductController::class);


Route::resource('/orders', OrderController::class);

Route::resource('/services', ServiceController::class);

Route::resource('/odetails', OdetailController::class);

Route::resource('/types', TypeController::class);

// les routes du authcontroller
Route::post('inscription', [AuthController::class, 'InscrisUtilisateur']);
Route::get('showlogin', [AuthController::class, 'showLogin']);

Route::get('verify-login/{token}', [AuthController::class, 'verifyLogin'])->name('verify-login');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');
//Route::post('connexion', [AuthController::class, 'connexion']);

Route::post('logout', [AuthController::class, 'logout']);
