<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProductController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    function show()
    {
      $product = Products::orderBy('id', 'desc')->take(3)->get();
        $c1 = Carousel::all();
        return view('Home', compact('product', 'c1'));
    }
    function create()
    {
        if (Auth::check()) {
            return view("Productsform");
        } else {
            return redirect()->route('login');
        }
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
        if (Auth::check()) {
            if (auth()->user()->role === 'admin') {
                $product = Products::all();
                return view("Productable", compact("product"));
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('loginpage');
        }
    }
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect()->route("table.product");
    }
    public function product($id)
    {
        $product = Products::findOrFail($id);
        return view('Singleproduct', compact('product'));
    }

    public function productshow()
    {
        $product = Products::where('categories', 'computers')->get();
        $p2 = Products::where('categories', 'mobiles-tablets')->get();
        $p3 = Products::where('categories', 'headphones')->get();
        $p4 = Products::where('categories', 'watches')->get();
        return view('Products', compact('product', 'p2', 'p3', 'p4'));
    }
}
