<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function listProduct()
    {
        // створюємо нову модель
        $myProduct = new Product();

        // записуємо дані в модель Product
        $myProduct->setProduct(['potato', 'tomato', 'onion']);

        // отримуємо дані з моделі в змінну products
        $products = $myProduct->getProduct();

        return view('product', ['product' => $products]);
    }
}
