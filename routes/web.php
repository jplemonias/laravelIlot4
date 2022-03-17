<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BackofficeController;

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

Route::get('/', [TemplateController::class, 'showHomePage']);

Route::get('/product/{id}', [TemplateController::class, 'showProductPage']);

Route::get('/products', [TemplateController::class, 'showProductsPage']);

Route::get('/productsprice', [TemplateController::class, 'showProductsPagePrice']);

Route::get('/cart', [CartController::class, 'showCartPage']);

Route::get('/about', [TemplateController::class, 'showAboutPage']);

Route::get('/backoffice', [BackofficeController::class, 'show']);

Route::get('/backoffice/create', [BackofficeController::class, 'showCreate']);

Route::post('/backoffice/create/new', [BackofficeController::class, 'create']);

Route::delete('/backoffice/{id}/destroy', [BackofficeController::class, 'destroy'])->name('delete');

Route::get('/backoffice/product/{id}/edit', [BackofficeController::class, 'showEdit']);

Route::post('/backoffice/{id}/update', [BackofficeController::class, 'update'])->name('update');
