<?php

namespace App\Http\Controllers;
use App\Models\Order;
use DB;
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

    public function destroy(): Redirector|RedirectResponse
    {
        $deletedProduct = Order::find(19);
        $deletedProduct->delete();

        return redirect('/cart');
    }
}
