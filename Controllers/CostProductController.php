<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Models\CostProduct;

class CostProductController extends BaseController
{
    public function cost()
    {
        // створюємо нову модель
        $product = new CostProduct();

        // додаємо новий елемент в модель
        $product->addPrice('new_product', 9.99);

        // отримуємо дані з моделі в змінну prices
        $prices = $product->getPrices();

        return view('costProduct', ['prices' => $prices]);
    }
}
