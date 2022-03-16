<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function selectIdNamePriceQuantityDescriptionAllProductsByOrderAsc()
    {
        $data = Product::orderby('name', 'asc')->select('id', 'name', 'price', 'quantity', 'description')->get();
        return view('backofficeProduct', ['data' => $data]);
    }

    public function selectOneProduct(int $id)
    {
        $data = Product::find($id);
        return view('editProduct', ['data' => $data]);
    }

    public function put(int $id, Request $request)
    {
        $edit = $request->input();
        Product::where('id', $id)->update(array(
            'name' =>  $edit['name'],
            'description' =>  $edit['description'],
            'quantity' =>  $edit['quantity'],
            'price' =>  $edit['price'],
            //'image' =>  'image'],
            'weight' =>  $edit['weight'],
            'category_id' =>  $edit['category'],
            'discount' =>  $edit['discount']

        ));
        return redirect('backoffice')->with('','');
    }
    
    public function delete(int $id)
    {
        Product::where('id', $id)->delete();
        // dd($data);
        return redirect('backoffice')->with('','');
    }
    
    public function addProduct()
    {
        $data = [
            'name' => 'name',
            'description' =>'description',
            'quantity' => 0,
            'price' => 0,
            //'image' =>  'image',
            'weight' => 0,
            'category_id' => 1,
            'discount' => 0
        ];
        return view('addProduct', ['data' => $data]);
    }
    
    public function post(Request $request)
    {
        $edit = $request->input();
        // dd($edit);
        $data = [
            'name' =>  $edit['name'],
            'description' =>  $edit['description'],
            'quantity' =>  $edit['quantity'],
            'price' =>  $edit['price'],
            'image' =>  'img/image.png',
            'weight' =>  $edit['weight'],
            'category_id' =>  $edit['category'],
            'discount' =>  $edit['discount'],
            'available' =>  $edit['available']
        ];
        Product::insert($data);
        return redirect('backoffice')->with('','');
        // return view('editProduct', ['data' => $data]);
    }
}
