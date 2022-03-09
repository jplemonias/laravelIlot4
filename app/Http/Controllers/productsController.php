<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProductsController extends Controller 
{
    public function show () 
    {
        return view('products');
    }
}