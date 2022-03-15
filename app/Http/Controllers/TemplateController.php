<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function showHomePage()
    {
        return view("home");
    }

    public function indexProductsPage()
    {
        $products = DB::select('select * from products');
        return view('products', ['products' => $products]);
    }

    public function showProductPage(int $id)
    {
        $product = DB::select('select * from products where id = ?',[$id]);
        return view("product",  ['product' => $product]);
    }

    public function showCartPage()
    {
        return view("cart");
    }

    public function showAboutPage()
    {
        return view("about");
    }
}
