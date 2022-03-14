<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    public function showProductPage($id)

    {
        $products = DB::select('select * from products where id = :id', ['id' => 1]);
        return view('product', ['products' => $products]);
    }
}
