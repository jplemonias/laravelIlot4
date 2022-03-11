<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function SelectAllProducts()
    {
        $data = DB::select('select * from products');
        return view('products', ['data' => $data]);
    }

}
