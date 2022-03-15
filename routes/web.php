<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AboutController;

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

Route::get('/products', [TemplateController::class, 'indexProductsPage']);

Route::get('/cart', [TemplateController::class, 'showCartPage']);

Route::get('/about', [AboutController::class, 'showAboutPage']);
