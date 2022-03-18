<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class BackofficeController extends Controller
{
    public function selectIdNamePriceQuantityDescriptionAllProductsByOrderAsc()
    {
        $data = Product::orderby('name', 'asc')->select('id', 'name', 'price', 'quantity', 'description', 'category_id')->get();
        foreach($data as $product){
            $product->category_id = $product->category->name;
        }
        return view('backofficeProduct', ['data' => $data]);
    }

    public function selectOneProduct(int $id)
    {
        $data = Product::find($id);
        return view('editProduct', ['data' => $data]);
    }

    public function put(int $id, Request $req)
    {
        $edit = $req->input();
        Product::where('id', $id)->update(array(
            'name' =>  $edit['name'],
            'description' =>  $edit['description'],
            'quantity' =>  $edit['quantity'],
            'price' =>  $edit['price'],
            //'image' =>  'image'],
            'weight' =>  $edit['weight'],
            'category_id' =>  $edit['category_id'],
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
        $data['categories'] =  Category::all()->all();
        return view('addProduct', ['data' => $data]);
    }
    
    public function post(Request $req)
    {
        (new ValidationFormController)->newProduct($req);
        $edit = $req->input();
        $data = [
            'name' =>  $edit['name'],
            'description' =>  $edit['description'],
            'quantity' =>  $edit['quantity'],
            'price' =>  $edit['price'],
            'image' =>  'img/image.png',
            'weight' =>  $edit['weight'],
            'category_id' =>  $edit['category_id'],
            'discount' =>  $edit['discount'],
            'available' =>  $edit['available']
        ];
        Product::insert($data);
        return redirect('backoffice')->with('','');
        // return view('editProduct', ['data' => $data]);
    }
    
    public function getCategory(Request $req)
    {
        // $post = Categories::first();
        // dd($post);
        // $post->category;
        // $post->category();
    }
}
