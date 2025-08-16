@extends('layout.app')

@section('title', 'Edit Product')

@section('content')
    <div class="form-back">
        <div class="container">
            <form method="POST" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="container mb-4">
                    <select name="categories" id="categorySelect" class="form-select text-white"
                        style="width: 200px; cursor: pointer; background-color:rgb(76, 76, 184);">
                        <option value="" disabled>Select categories</option>
                        <option value="headphone" {{ $product->categories == 'headphone' ? 'selected' : '' }}>Headphone</option>
                        <option value="computers" {{ $product->categories == 'computers' ? 'selected' : '' }}>Computers & Laptops</option>
                        <option value="watches" {{ $product->categories == 'watches' ? 'selected' : '' }}>Watches</option>
                        <option value="mobiles-tablets" {{ $product->categories == 'mobiles-tablets' ? 'selected' : '' }}>Mobiles & Tablets</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputImage1" name="name" 
                           value="{{ old('name', $product->name) }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="exampleInputPrice1" name="price"
                           value="{{ old('price', $product->price) }}">
                </div>

                <!-- RAM and Storage -->
                <div id="ramStorageFields" style="display: {{ in_array($product->categories, ['computers','mobiles-tablets']) ? 'block' : 'none' }};">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ram" class="form-label">RAM (GB)</label>
                            <select class="form-select" id="ram" name="ram">
                                <option value="">Select RAM</option>
                                @foreach([1,2,3,4,6,8,12,16,32,64] as $ram)
                                    <option value="{{ $ram }}" {{ $product->ram == $ram ? 'selected' : '' }}>
                                        {{ $ram }} GB
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="storage" class="form-label">Storage (GB)</label>
                            <select class="form-select" id="storage" name="storage">
                                <option value="">Select Storage</option>
                                @foreach([32,64,128,256,512,1028] as $storage)
                                    <option value="{{ $storage }}" {{ $product->storage == $storage ? 'selected' : '' }}>
                                        {{ $storage == 1028 ? '1 TB (1028 GB)' : $storage . ' GB' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Water Resistance -->
                <div id="waterResistanceField" style="display: {{ in_array($product->categories, ['watches','headphone']) ? 'block' : 'none' }};" class="mb-3">
                    <label class="form-label">Water Resistant</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="water_resistant" value="1"
                               {{ $product->water_resistant ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="water_resistant" value="0"
                               {{ !$product->water_resistant ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Upload New Product Images (optional)</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                </div>

                <!-- Show existing images -->
                @if($product->images)
                    <div class="mb-3">
                        <label class="form-label">Current Images:</label>
                        <div class="d-flex flex-wrap">
                            @foreach(json_decode($product->images) as $img)
                                <div class="me-2 mb-2">
                                    <img src="{{ asset($img) }}" alt="Product Image" width="100" height="100" style="object-fit:cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <button type="submit" class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('categorySelect').addEventListener('change', function () {
            const category = this.value;
            const ramStorageFields = document.getElementById('ramStorageFields');
            const waterResistanceField = document.getElementById('waterResistanceField');

            ramStorageFields.style.display = 'none';
            waterResistanceField.style.display = 'none';

            if (category === 'computers' || category === 'mobiles-tablets') {
                ramStorageFields.style.display = 'block';
            } 
            else if (category === 'watches' || category === 'headphone') {
                waterResistanceField.style.display = 'block';
            }
        });
    </script>
@endsection
