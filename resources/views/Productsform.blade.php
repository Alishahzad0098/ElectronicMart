@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="form-back">
        <div class="container">
            <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
                @csrf
                <div class="container mb-4">
                    <select name="categories" id="categorySelect" class="form-select text-white" aria-label="All categories"
                        style="width: 200px; cursor: pointer; background-color:rgb(76, 76, 184);">
                        <option value="" selected>Select categories</option>
                        <option value="headphone">Headphone</option>
                        <option value="computers">Computers & Laptops</option>
                        <option value="watches">Watches</option>
                        <option value="mobiles-tablets">Mobiles & Tablets</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputImage1" name="name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="exampleInputPrice1" name="price">
                </div>

                <!-- RAM and Storage (for computers and mobiles) -->
                <div id="ramStorageFields" style="display: none;">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ram" class="form-label">RAM (GB)</label>
                            <select class="form-select" id="ram" name="ram">
                                <option value="">Select RAM</option>
                                <option value="1">1 GB</option>
                                <option value="2">2 GB</option>
                                <option value="3">3 GB</option>
                                <option value="4">4 GB</option>
                                <option value="6">6 GB</option>
                                <option value="8">8 GB</option>
                                <option value="12">12 GB</option>
                                <option value="16">16 GB</option>
                                <option value="32">32 GB</option>
                                <option value="64">64 GB</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="storage" class="form-label">Storage (GB)</label>
                            <select class="form-select" id="storage" name="storage">
                                <option value="">Select Storage</option>
                                <option value="32">32 GB</option>
                                <option value="64">64 GB</option>
                                <option value="128">128 GB</option>
                                <option value="256">256 GB</option>
                                <option value="512">512 GB</option>
                                <option value="1028">1 TB (1028 GB)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Water Resistance (for watches and headphones) -->
                <div id="waterResistanceField" style="display: none;" class="mb-3">
                    <label class="form-label">Water Resistant</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="water_resistant" id="waterResistantYes"
                            value="yes">
                        <label class="form-check-label" for="waterResistantYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="water_resistant" id="waterResistantNo" value="no"
                            checked>
                        <label class="form-check-label" for="waterResistantNo">No</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4"
                        placeholder="Enter product description with details..."></textarea>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Upload Product Images</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('categorySelect').addEventListener('change', function () {
            const category = this.value;
            const ramStorageFields = document.getElementById('ramStorageFields');
            const waterResistanceField = document.getElementById('waterResistanceField');

            // Hide all special fields first
            ramStorageFields.style.display = 'none';
            waterResistanceField.style.display = 'none';

            // Show fields based on selection
            if (category === 'computers' || category === 'mobiles-tablets') {
                ramStorageFields.style.display = 'block';
            }
            else if (category === 'watches' || category === 'headphone') {
                waterResistanceField.style.display = 'block';
            }
        });
    </script>
@endsection