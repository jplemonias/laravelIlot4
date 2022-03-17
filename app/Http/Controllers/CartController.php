<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;

class CartController extends Controller
{
    public function showCartPage()
    {
        $products = Product::get();

        return view('cart', ['products' => $products]);
    }
}
