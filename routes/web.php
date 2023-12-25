<?php

use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomers;
use App\Livewire\Notifications;
use App\Livewire\ShowNotifications;
use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
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
    return view('backend.layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobs', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

//livewire
Route::get('/customer/create',CreateCustomer::class);
Route::get('/customers',Customers::class);
Route::get('/customers/{customer}',Customers::class);
Route::get('/customers/{customer}',ViewCustomer::class);
Route::get('/customers/{customer}',EditCustomers::class);
Route::get('/notifications',Notifications::class);
Route::get('/registerLivewire',Register::class);
Route::get('/LoginLivewire',Login::class)->name('LoginLivewire');

Route::get('/showNotifications',ShowNotifications::class);
