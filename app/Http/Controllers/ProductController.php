<?php

namespace App\Http\Controllers;

use App\Models\Product;
class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::inRandomOrder()
            ->whereActive(1)
            ->take(16)
            ->get();

        return view('products.index', compact('products'));
    }
}
