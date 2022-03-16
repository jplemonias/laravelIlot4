<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/product/{id}', [ProductController::class, 'selectOneProduct']);

Route::get('/products', [ProductController::class, 'selectAllProducts']);

Route::get('/cart', [TemplateController::class, 'showCartPage']);

Route::get('/about', [TemplateController::class, 'showAboutPage']);


Route::get('/productsByName', [ProductController::class, 'selectAllProductsOrderByName']);
Route::get('/productsByPrice', [ProductController::class, 'selectAllProductsOrderByPriceAsc']);
Route::get('/productPrice/{id}', [ProductController::class, 'selectOneProductNameAndPrice']);


Route::get('/backoffice', [BackofficeController::class, 'selectIdNamePriceQuantityDescriptionAllProductsByOrderAsc']);
Route::delete('/deleteProduct/{id}', [BackofficeController::class, 'delete'])->name('deleteProduct');

Route::get('/edit/{id}', [BackofficeController::class, 'selectOneProduct']);
Route::put('/editProduct/{id}', [BackofficeController::class, 'put'])->name('putProduct');

Route::get('/addNewProduct', [BackofficeController::class, 'addProduct']);
Route::post('/insertProduct', [BackofficeController::class, 'post'])->name('postProduct');