<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationFormController extends Controller
{
    public function newProduct(Request $request) {
      $this->validate($request, [
        'name' => 'bail|required|unique:products|max:255',
        'description' => 'bail|required|unique:products|max:255',
        // 'image' => 'bail|required|unique:products|max:255',
        'quantity' => 'bail|required|unique:products|integer',
        'price' => 'bail|required|unique:products|integer',
        'weight' => 'bail|required|unique:products|integer',
        'category' => 'bail|required|unique:products|integer',
        'discount' => 'bail|required|unique:products|integer',
        'Available' => 'bail|required|unique:products|boolean',
      ]);
    }

}
