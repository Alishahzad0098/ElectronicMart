@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="addproducts ms-5 mb-4">
            <a href="{{ route('form.product') }}" class="btn btn-info text-white">Add Products</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->categories }}</td>
                        <td>{{ $products->name }}</td>
                        <td>${{ number_format($products->price, 2) }}</td>
                        <td>{{ Str::limit($products->description, 50) }}</td>
                        @php
                            $images = is_array($products->images) ? $products->images : json_decode($products->images, true);
                        @endphp

                        <td>
                            @if (!empty($images))
                                @foreach ($images as $img)
                                    <img src="{{ asset($img) }}" width="80" height="80"
                                        style="margin: 5px;width: 50px; height: 50px; object-fit: cover;">
                                @endforeach
                            @else
                                <span class="text-muted">No images</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('delete.product', $products->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection