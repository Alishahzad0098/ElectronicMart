<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show()
    {
        $products = Products::where('categories', 'computers')->get();
        $car = Carousel::all();
        return view('Home', compact('products','car'));
    }
    function create()
    {
        return view("Productsform");
    }
    public function store(Request $request)
    {

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $timestamp = now()->format('YmdHis');
                $randomString = Str::random(5);
                $extension = $image->getClientOriginalExtension();
                $filename = $timestamp . '_' . $randomString . '.' . $extension;

                $path = $image->storeAs('public/products', $filename);
                $imagePaths[] = str_replace('public/', '', $path); // Remove 'public/' for web access
            }
        }

        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'images' => json_encode($imagePaths), // Store as JSON
        ]);

        return redirect()->route('table.product')->with('success', 'Product added successfully');
    }

    public function table()
    {
        $product = Products::all();
        return view("Productable", compact("product"));
    }
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect()->route("table.product");
    }

}