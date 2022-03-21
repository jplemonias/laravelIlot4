<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Models\Products;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;


class BackofficeController extends Controller
{
    public function show(): View|Factory
    {
        return view('backoffice', ['products' => Products::orderBy('id', 'ASC')->get()]);
    }

    public function showEdit(int $id): View|Factory
    {
        return view('backofficeEdit', ['product' => Products::find($id)]);
    }

    public function showCreate(): View|Factory
    {
        return view('backofficeCreate', ['product' => Products::get()]);
    }

    public function destroy(int $id): Redirector|RedirectResponse
    {
        $deletedProduct = Products::find($id);
        $deletedProduct->delete();

        return redirect('/backoffice');
    }

    public function update(StorePostRequest $request): Redirector|RedirectResponse
    {
        $product = Products::find($request->id);
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

    public function create(StorePostRequest $request): Redirector|RedirectResponse
    {
        $product = Products::create([
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