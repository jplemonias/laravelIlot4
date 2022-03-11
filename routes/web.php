<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;

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
class cart{
    public function printImg($book) {
        echo '<img width="100%" src=/'.$book->image.' class="card-img-top" alt="Cover :'.$book->name.'">';
    }

    public function printInfosBooks($book) {
        echo '<h5 class="card-title">'.$book->name.'</h5>';
        echo '<p class="card-text">'.$book->description.'</p>';
        if ( $book->discount != null ) {
            echo '<small class="badge rounded-pill bg-success">discount : '.$book->discount.'%</small>';
        }
    }

    public function printPrice($book) {
        $price = $this->priceForDevise($book->price, $book->discount);
        if ( $book->discount != null ) {
            $priceDiscount = number_format(  $this->priceDiscount($book->price, $book->discount), 2, ",", " ");
            echo '<small class="text-muted"><del>'.$price.'</del> € => '.$priceDiscount.' €</small>';
        }
        else {
            echo '<small class="text-muted">'.$price.' €</small>';
        }
    }

    public function priceForDevise($price) {
        // echo "\price\n".number_format( $discouted/100, 2, ",", " ");
        return number_format( $price/100, 2, ",", " ");
    }
    
    public function discount($price, $discount) {
        $discount = $price*($discount/100);
        $discount = (floor($discount)/100);
        return $discount;
    }

    public function priceDiscount($price, $discount) {
        $discount = $this->discount($price, $discount);
        $price = $price/100;
        $discouted = $price - $discount;
        return $discouted;
    }
}
Route::get('/', [TemplateController::class, 'showHomePage']);

Route::get('/product/{id}', [TemplateController::class, 'showProductPage']);
Route::get('/product/{id}', [ProductController::class, 'SelectOneProduct']);

Route::get('/products', [TemplateController::class, 'showProductsPage']);
Route::get('/products', [ProductsController::class, 'SelectAllProducts']);

Route::get('/cart', [TemplateController::class, 'showCartPage']);

Route::get('/about', [TemplateController::class, 'showAboutPage']);