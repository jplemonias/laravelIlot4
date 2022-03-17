<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CartController extends Controller
{
    public function showCartPage(): View|Factory
    {
        $products = Product::get();

        return view('cart', ['products' => $products]);
    }
}
