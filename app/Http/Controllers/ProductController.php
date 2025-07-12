<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    function show()
    {
        $product = Products::where('categories', 'computers')->get();
        $c1 = Carousel::all();
        return view('Home', compact('product', 'c1'));
    }
    function create()
    {
        return view("Productsform");
    }
    public function store(Request $request)
    {
        // dd($request);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $timestamp = now()->format('YmdHis');
                    $randomString = Str::random(5);
                    $extension = $image->getClientOriginalExtension();
                    $filename = $timestamp . '_' . $randomString . '.' . $extension;

                    // Correct storage path
                    $destination = public_path('images/products'); // e.g. public/images/products

                    if (!file_exists($destination)) {
                        mkdir($destination, 0755, true); // create folder if not exists
                    }

                    $image->move($destination, $filename);
                    $imagePaths[] = 'images/products/' . $filename;
                }
            }
        }

        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
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
