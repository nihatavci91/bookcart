<?php

namespace App\Http\Controllers;

use App\Business\ProductManager;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, ProductManager $productManager)
    {
        [$products, $cart] = $productManager->get();
        $cart_quantity = count($cart);

        return view('products.index', [
            'products' => $products,
            'cart' => $cart,
            'cart_quantity' => $cart_quantity
        ]);
    }
}
