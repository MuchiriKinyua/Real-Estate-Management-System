<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('agents', App\Http\Controllers\AgentController::class);
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('features', App\Http\Controllers\FeatureController::class);
Route::resource('images', App\Http\Controllers\ImageController::class);
Route::resource('leases', App\Http\Controllers\LeaseController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('properties', App\Http\Controllers\PropertyController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('transactions', App\Http\Controllers\TransactionController::class);
Route::resource('users', UserController::class);
