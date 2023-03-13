<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Customers_Report;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Invoices_Report;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
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
    return view('auth.login');
});


Auth::routes();

Route::get('/{page}', [AdminController::class,'index']);
Route::resource('invoices/invoices', InvoiceController::class);
Route::resource('sections/sections', SectionsController::class);
Route::resource('products/products', ProductsController::class);

// Route::get('InvoicesDetails/{id}', [InvoicesDetailsController::class,'edit']);
Route::get('/section/{id}', [InvoiceController::class,'getproducts']);

Route::get('/edit_invoice/{id}', [InvoiceController::class,'edit']);


Route::get('invoices_report', [Invoices_Report::class,'index']);
Route::post('Search_invoices', [Invoices_Report::class,'Search_invoices']);


// Route::resource('width',[Customers_Report::class,'index']);
// Route::get('Search_customers',[Customers_Report::class,'Search_customers']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
