<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use DB;
use http\Client\Curl\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CartController extends Controller
{
    public function showCartPage(): View|Factory
    {

        return view('cart', ['orders' => Order::where('customer_id', 1)->get()]);
    }
}
