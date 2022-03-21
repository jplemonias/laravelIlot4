<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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


        return view('products', ['products' => Products::orderBy('name', 'ASC')->get()]);
    }

    public function showProductsPagePrice(): View|Factory
    {
        return view('products', ['products' => Products::orderBy('price', 'ASC')->get()]);
    }

    public function showProductPage(int $id): View|Factory
    {
        return view('product', ['product' => Products::find($id)]);
    }

    public function showCategoryProductPage($category): View|Factory
    {
        return view('productCategory', ['products' => Products::where('category_id', $category)->get()]);
    }

    public function showCategories(): View|Factory
    {
        return view('categories', ['categories' => Category::get(), 'products' => Products::orderBy('name', 'ASC')->get()]);
    }
}
