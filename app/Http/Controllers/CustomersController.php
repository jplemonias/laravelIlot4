<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;


class CustomersController extends Controller{

    public function show()    {
        return view('customers', ['customers' => Customer::get()]);
    }
}
