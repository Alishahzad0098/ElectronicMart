@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="form-back">
        <div class="container">
            <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
                @csrf
                <div class="container ms-5">
                    <select name="categories" class="form-select text-white " aria-label="All categories"
                        style="width: 200px; cursor: pointer; background-color:rgb(76, 76, 184) ;">
                        <option selected>Select categories</option>
                        <option value="television">Television</option>
                        <option value="headphone">Headphone</option>
                        <option value="computers">Computers</option>
                        <option value="watches">Watches</option>
                        <option value="mobiles-tablets">Mobiles & Tablets</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputImage1" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="exampleInputPrice1" name="price" id="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage2" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleInputImage2" name="description" id="description">
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Upload Product Images</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection