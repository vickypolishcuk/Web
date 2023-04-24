<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $products = [];

    // функція запису нових елементів
    public function setProduct($products)
    {
        $this->products = $products;
    }

    // функція для отримання масиву з даними
    public function getProduct()
    {
        return $this->products;
    }
}
