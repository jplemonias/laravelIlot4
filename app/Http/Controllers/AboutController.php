<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //@return \Illuminate\Http\Response
    public function showAboutPage()



    {
        $products = DB::select('select * from products where id ');
        foreach ($products as $product) {
            echo $product->name;

            $products = DB::select('select * from products where id = :id', ['id' => 1]);

        return view('about', ['products' => $products]);
    }
}}





