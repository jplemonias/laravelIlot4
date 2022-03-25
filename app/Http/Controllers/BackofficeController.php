<?php

namespace App\Http\Controllers;
use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function selectIdNamePriceQuantityDescriptionAllProductsByOrderAsc()
    {
        $data = Product::orderby('name', 'asc')->select('id', 'name', 'price', 'quantity', 'description', 'category_id')->get();
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
        Product::where('id', $id)->update([
            'name' =>  $edit['name'],
            'description' =>  $edit['description'],
            'quantity' =>  $edit['quantity'],
            'price' =>  $edit['price'],
            //'image' =>  'image'],
            'weight' =>  $edit['weight'],
            'category_id' =>  $edit['category_id'],
            'discount' =>  $edit['discount']
        ]);
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
        $data['categories'] = Category::all()->all();
        // dd($data['categories'][0]->description);
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
    }















    
    public function selectAllOrders()
    {
        $data = Order::all();
        return view('backofficeOrders', ['data' => $data]);
    }

    public function selectOneOrder(int $id)
    {
        $data = Order::find($id);
        if ($data) {
            return view('backofficeOrder', ['data' => $data]);
        }
        else {
            return abort(404);
        }
    }
}
