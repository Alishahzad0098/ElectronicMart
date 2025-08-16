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
    function show()
    {
        $product = Products::orderBy('id', 'desc')->take(6)->get();
        $c1 = Carousel::all();
        return view('Home', compact('product', 'c1'));
    }
    function create()
    {
        if (Auth::check()) {
            if (auth()->user()->role === 'admin') {
                return view("Productsform");
            } else {
                return redirect()->route('home');
            }
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
            'ram' => $request->ram,
            'storage' => $request->storage,
            'water_resistant' => $request->water_resistant,
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
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('Editproduct', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $imagePaths = json_decode($product->images, true) ?? [];

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

        $product->update([
            'name' => $request->name,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'water_resistant' => $request->water_resistant,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
        ]);

        return redirect()->route('table.product')->with('success', 'Product updated successfully');
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
    $product = Products::where('categories', 'computers')->paginate(8, ['*'], 'computer_page');
    $p2 = Products::where('categories', 'mobiles-tablets')->paginate(8, ['*'], 'mobile_page');
    $p3 = Products::where('categories', 'headphones')->paginate(8, ['*'], 'headphone_page');
    $p4 = Products::where('categories', 'watches')->paginate(8, ['*'], 'watch_page');

    return view('Products', compact('product', 'p2', 'p3', 'p4'));
}
    public function search(Request $request)
{
    $query = $request->input('query');
    
    $products = Products::where('name', 'like', "%$query%")
                ->orWhere('description', 'like', "%$query%")
                ->orWhere('price', 'like',"%$query%")
                ->paginate(10);
    
    return view('Searchitem', [
        'products' => $products,
        'query' => $query
    ]);
}
public function about(){
    return view('About');
}
public function contact(){
    return view('Contact');
}
public function index(Request $request)
{
    $query = Products::query();

    // If category filter applied
    if ($request->filled('categories')) {
        $query->where('categories', $request->categories);
    }

    $products = $query->paginate(9); // adjust per page count

    return view('productindex', compact('products'));
}
public function compare($id)
{
    $product = Products::findOrFail($id);

    // If you're storing category as string field "categories"
    $otherProducts = Products::where('categories', $product->categories)
                             ->where('id', '!=', $id)
                             ->get();

    return view('Compare', compact('product', 'otherProducts'));
}



}
