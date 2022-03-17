<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class BackofficeController extends Controller
{
    public function show()
    {
        return view('backoffice', ['products' => Product::orderBy('id', 'ASC')->get()]);
    }

    public function showEdit(int $id): View|Factory
    {
        return view('backofficeEdit', ['product' => Product::find($id)]);
    }

    public function showCreate()
    {
        return view('backofficeCreate', ['product' => Product::get()]);
    }

    public function destroy($id)
    {

        $deletedProduct = Product::find($id);

        $deletedProduct->delete();

        return redirect('/backoffice');
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->available = $request->available;
        $product->discount = $request->discount;
        $product->image = $request->image;
        $product->save();

        return redirect('/backoffice');
    }

    public function create(Request $request): Redirector|RedirectResponse
    {
        $product = Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'weight' => $request->weight,
        'available' => $request->available,
        'discount' => $request->discount,
        'image' => $request->image,
        'category_id' => $request->category_id,
        ]);
        $product->save();

        return redirect('/backoffice');
    }

}
