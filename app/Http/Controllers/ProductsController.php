<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Product;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ProductsController extends Controller
{

    public function showHomePage(): View|Factory
    {
        return view("home");
    }

    public function showAboutPage(): View|Factory
    {
        return view("about");
    }

    public function showProductsPage(): View|Factory
    {


        return view('products', ['products' => Product::orderBy('name', 'ASC')->get()]);
    }

    public function showProductsPagePrice(): View|Factory
    {
        return view('products', ['products' => Product::orderBy('price', 'ASC')->get()]);
    }

    public function showProductPage(int $id): View|Factory
    {
        return view('product', ['product' => Product::find($id)]);
    }

    public function showCategoryProductPage($category): View|Factory
    {
        return view('productCategory', ['products' => Product::where('category_id', $category)->get()]);
    }

    public function showCategories(): View|Factory
    {
        return view('categories', ['categories' => Category::get()]);
    }

    public function update(StorePostRequest $request): Redirector|RedirectResponse
    {
//        $product = Products::find($request->id);
//        $product->name = $request->name;
//        $product->description = $request->description;
//        $product->price = $request->price;
//        $product->weight = $request->weight;
//        $product->available = $request->available;
//        $product->discount = $request->discount;
//        $product->image = $request->image;
//        $product->save();

        return redirect('/categories');
    }
}
