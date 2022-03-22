<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use DB;
use http\Client\Curl\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;


class CartController extends Controller
{

    public function showCartPage(): View|Factory
    {
        $order = Order::find(19);

        return view('cart', ['order' => $order]);
    }

    public function destroy(int $id): Redirector|RedirectResponse
    {
        $deletedProduct = Order::find($id)->where('pivot_product_id', $id)->get();
        $deletedProduct->delete();

        return redirect('/cart');
    }
}
