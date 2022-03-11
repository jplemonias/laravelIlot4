<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function SelectOneProduct(int $id)
    {
        $data = DB::select('SELECT * FROM products WHERE id = :id', array('id'=>$id));
        return view('product', ['data' => $data]);
    }

}
