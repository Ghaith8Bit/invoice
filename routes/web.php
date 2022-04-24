<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->middleware('auth');
Route::resource('invoices', InvoiceController::class);
Auth::routes();
Route::get('/{page}', [AdminController::class, 'index'])->middleware('auth');
