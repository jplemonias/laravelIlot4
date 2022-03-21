<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class TemplateController extends Controller
{
    public function showHomePage()
    {
        return view("home");
    }

    public function indexProductsPage()
    {
        $products=Product::all();
//        return view('backoffice', compact('products'));
        return view('products', compact('products'));
//        $products = DB::select('select * from products');
//        return view('products', ['products' => $products]);
    }

    public function showProductPage(int $id)
    {
        $product = Product::find($id);
        return view("product",  ['product' => $product]);

    }

    public function showNamePricePage(int $id)
    {
        $product = Product::find($id);
        return view('NamePriceProduct', ['product' => $product]);
}

    public function sortProductName()
    {
        $products = Product::orderby('name', 'asc')->get();
        return view('OrderNameproducts', ['product' => $products]);
    }
    public function sortProductPrice()
    {
        $products = Product::orderby('price', 'asc')->get();
        return view('OrderPriceproducts', ['product' => $products]);
    }


    public function showCartPage()
    {
        return view("cart");
    }

    public function showAboutPage()
    {
        return view("about");
    }

    public function modifyproduct(int $id) {

        return view("ModifyProduct", ['test']);
    }




}
