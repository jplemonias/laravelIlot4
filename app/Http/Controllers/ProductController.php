<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Controllers\TemplateController;

class ProductController extends Controller
{
    public function sortProductName()
    {
        $products = DB::table('products')->get();
        foreach ($products as $product)
            var_dump($product->name);
    }
}


//    {
//
//            $product = Product::all($name) {
//            return view("OrderNameproducts", [$product->name]);
//        }
//    }
///
//        $product = Product::find($id);
//        return view("OrderNameproducts",  [orderBy('name') => $product]);
//    }
//}
//
//public function sortProductPrice(){
//    $product = Product::find($id);
//    return view("price_products",  [ => $product]);
//}
//}



//}
//    public function showProductPage($id)
//{
//    $products = DB::select('select * from products where id = :id', ['id' => 1]);
//    return view('product', ['products' => $products]);
//}}
//
//
//foreach (Product::all() as $product) {
//    echo $product->name;
//}
