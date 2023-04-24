<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostProduct extends Model
{
    protected $prices = [
        'potato' => 29.99,
        'tomato' => 49.99,
        'onion' => 19.99,
    ];

    // функція запису нових елементів
    public function addPrice($product, $price)
    {
        $this->prices[$product] = $price;
    }

    // функція для отримання масиву з даними
    public function getPrices()
    {
        return $this->prices;
    }
}

