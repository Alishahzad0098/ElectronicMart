<?php
    

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Http\Request;
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
        return view("carousel.carform",compact('car'));
    }


public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'para' => 'required|string'
    ]);

    // Handle image upload
    $imageData = [];
    
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
        
        // Store the image in storage/app/public/carousel
        $path = $image->storeAs('public/carousel', $filename);
        
        // Create the public accessible URL
        $imageData = [
            'filename' => $filename,
            'path' => 'storage/carousel/' . $filename,
            'original_name' => $image->getClientOriginalName(),
            'size' => $image->getSize(),
            'mime_type' => $image->getMimeType()
        ];
    }
$imagePath = $request->file('img')->store('carousel', 'public');

    // Create new carousel item
    Carousel::create([
        'img' => $imagePath,
        'para' => $request->para
    ]);

    return back()->with('success', 'Image uploaded successfully!');
}
}
