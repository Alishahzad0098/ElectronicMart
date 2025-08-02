<?php

namespace App\Http\Controllers;
use App\Models\Orderitems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; // if storing user_id
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Ordercontroller extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return view('Checkout');
        }
       else{
        return  redirect()->route('loginpage');
       } // Make sure the view file exists: resources/views/Checkout.blade.php
    }


    public function placeOrder(Request $request)
    {
        $cart = session('cart');

        if (!$cart || count($cart) === 0) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        // Calculate total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Create order
        $order = Order::create([
            'customer_name' => $request->input('name', 'Guest'),
            'number' => $request->input('number'),
            'customer_email' => $request->input('email'),
            'address' => $request->input('address'),
            'payment' => $request->input('payment'), // ✅ Save payment method
            'total_amount' => $total,
        ]);

        // Create order items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'images' => json_encode($item['images']), // if array, convert to JSON
            ]);


        }

        // Clear c art
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
    public function order(){
        $order = Order::all();
        return view('Ordertable',compact('order'));
    }
    public function orderitem(){
        $orderitem=Orderitem::all();
        return view('orderitemstable',compact('orderitem'));
    }
}
