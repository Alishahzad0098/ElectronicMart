<?php
    

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CarouselController extends Controller
{
    function create()
    {
        return view("carousel.carform");
    }
    function table()
    {
        $car = Carousel::all();
        return view("carousel.cartable",compact('car'));
    }
   public function store(Request $request)
{ 
    $c1 = new Carousel();
    $image = $request->file("img");

    if ($image) {
        $imageName = time() . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $c1->img = $imageName;
    }

    $c1->para = $request->para;
    $c1->save();

    return redirect()->back()->with('success', 'Carousel saved!');
}
}