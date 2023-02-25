<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Products
Route::get('/', [ProductController::class, 'index'])->name('homepage');

Route::middleware('auth')->group(function ()
{
    // Users
    Route::get('/users', [ProfileController::class, 'index'])->name('users');

    // Invoices
    Route::resource('/invoices', InvoiceController::class);
});

require __DIR__ . '/auth.php';
