<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Default to 1

        $product = Products::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // ✅ Decode the images from JSON stored in the DB
        $imageArray = json_decode($product->images, true); // true = convert to array

        // Get existing cart or start new
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description,
                'images' => $imageArray, // ✅ this stores array of image paths
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart); // Save updated cart in session

        return redirect()->back()->with('success', 'Product added to cart!');
    }
public function remove($id)
{
    $cart = session()->get('cart', []);
    unset($cart[$id]);
    session()->put('cart', $cart);
    return back()->with('success', 'Item removed from cart.');
}
}