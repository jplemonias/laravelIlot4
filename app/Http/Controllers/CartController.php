<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    function displayCart(){
        return \view('cart');
    }
}
