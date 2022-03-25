<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationFormController extends Controller
{
    public function newProduct(Request $request) {
      $this->validate($request, [
        'name' => 'bail|required|unique:products|max:255',
        'description' => 'bail|required|max:255',
        // 'image' => 'bail|required|max:255',
        'quantity' => 'bail|required|integer',
        'price' => 'bail|required|integer',
        'weight' => 'bail|required|integer',
        'category' => 'bail|required|integer',
        'discount' => 'bail|required|integer',
        'Available' => 'bail|required|boolean',
      ]);
    }
    
    public function login(Request $request) {
      $this->validate($request, [
        'name' => 'bail|required|unique:products|max:255',
        'password' => 'bail|required|max:255',
      ]);
    }

}
