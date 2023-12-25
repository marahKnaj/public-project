<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Api first step
Route::get('/user',[UserController::class,'index'])->middleware('auth:sanctum');
Route::get('/user/{id}',[UserController::class,'show']);
Route::get('/status0',[UserController::class,'statuShow'])->name('statuShow');
Route::get('/status1',[UserController::class,'statuShow1'])->name('statuShow1');

Route::get('/updatStatus/{id}',[UserController::class,'updateStatus'])->name('updateStatus');

Route::post('/add',[UserController::class,'store'])->middleware('auth:sanctum');
//Api authentication
Route::post('/auth/register',[AuthController::class,'createUser']);
Route::post('/auth/login',[AuthController::class,'loginUser']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::controller(RegisterController::class)->group(function(){

//     Route::post('register', 'register');

//     Route::post('login', 'login');

// });