<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/', [ProductsController::class, 'showHomePage']);

Route::get('/product/{id}', [ProductsController::class, 'showProductPage']);

Route::get('/products', [ProductsController::class, 'showProductsPage']);

Route::get('/productsprice', [ProductsController::class, 'showProductsPagePrice']);

Route::get('/cart', [CartController::class, 'showCartPage']);

Route::get('/about', [ProductsController::class, 'showAboutPage']);

Route::get('/backoffice', [BackofficeController::class, 'show']);

Route::get('/backoffice/create', [BackofficeController::class, 'showCreate']);

Route::post('/backoffice/create/new', [BackofficeController::class, 'create']);

Route::delete('/backoffice/{id}/destroy', [BackofficeController::class, 'destroy'])->name('delete');

Route::get('/backoffice/product/{id}/edit', [BackofficeController::class, 'showEdit']);

Route::put('/backoffice/{id}/update', [BackofficeController::class, 'update'])->name('update');

Route::get('category/{name}/products', [ProductsController::class, 'showCategoryProductPage'])->name('products.category');

Route::get('/categories', [ProductsController::class, 'showCategories']);
