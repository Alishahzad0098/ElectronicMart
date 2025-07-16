<?php

namespace App\Http\Controllers;
 use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
 

public function addToCart(Request $request)
{
    $productId = $request->product_id;
    $quantity = $request->quantity ?? 1;

    $product = Products::findOrFail($productId);

    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
        // If product already in cart, just increase quantity
        $cart[$productId]['quantity'] += $quantity;
    } else {
        // Add new product to cart
        $cart[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'image' => json_decode($product->images)[0] ?? null // First image
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart!');
}
}