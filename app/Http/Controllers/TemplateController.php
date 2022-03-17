<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;

class TemplateController extends Controller
{

    public function showHomePage()
    {
        return view("home");
    }

    public function showAboutPage()
    {
        return view("about");
    }

    public function showProductsPage()
    {
        return view('products', ['products' => Product::orderBy('name', 'ASC')->get()]);
    }

    public function showProductsPagePrice()
    {
        return view('products', ['products' => Product::orderBy('price', 'ASC')->get()]);
    }

    public function showProductPage(int $id)
    {
        return view('product', ['product' => Product::find($id)]);
    }

}
