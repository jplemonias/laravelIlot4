<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //@return \Illuminate\Http\Response
    public function showProductsPage()


    {
            public function showProductsPage()
            $products = DB::select('select * from products where id = :id', ['id' => 1]);
            return view('products', ['products' => $products]);
        }
    }
}

