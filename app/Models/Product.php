<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function sortProductName()
    {
        return this->hasmany(Orders::class);
    }

    public function sortProductPrice()
    {
        return this->hasmany(Orders::class);
    }

    public function showNamePricePage()
    {
        return this->hasmany(Orders::class);
    }
}

