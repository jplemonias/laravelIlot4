<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function showHomePage()
    {
        return view("home");
    }

    public function showProductsPage()
    {
        return view("products");
    }
    
    public function showProductPage(int $id)
    {
        return view("product",  ['id' => $id]);
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