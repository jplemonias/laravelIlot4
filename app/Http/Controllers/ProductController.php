<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    public function selectAllProducts()
    {
        $data = Product::all();
        // $data = DB::select('select * from products');
        foreach($data as $product ){
            $discount = (floor($product->price*($product->discount/100))/100);
            $product->priceDiscounted = number_format(($product->price/100)-$discount, 2, ",", " ");
        }
        return view('products', ['data' => $data]);
    }

    public function selectAllProductsOrderByName()
    {
        $data = Product::orderby('name', 'asc')->get();
        foreach($data as $product ){
            $discount = (floor($product->price*($product->discount/100))/100);
            $product->priceDiscounted = number_format(($product->price/100)-$discount, 2, ",", " ");
        }
        return view('products', ['data' => $data]);
    }

    public function selectAllProductsOrderByPriceAsc()
    {
        $data = Product::orderby('price', 'asc')->select('name', 'price')->get();
        foreach($data as $product ){
            $discount = (floor($product->price*($product->discount/100))/100);
            $product->priceDiscounted = number_format(($product->price/100)-$discount, 2, ",", " ");
        }
        return view('productsTest', ['data' => $data]);
    }

    public function selectOneProduct(int $id)
    {
        $data = Product::find($id);
       
        // dd($data);
        //  $data = DB::select('SELECT * FROM products WHERE id = :id', array('id'=>$id));
        $discount = (floor($data->price*($data->discount/100))/100);
        $data->priceDiscounted = number_format(($data->price/100)-$discount, 2, ",", " ");
        return view('product', ['data' => $data]);
    }

    public function selectOneProductNameAndPrice(int $id)
    {
        $data = Product::where('id', $id)->select('name', 'price')->first();
        return view('productTest', ['data' => $data]);
    }
}
