@extends('layout') <!-- Make sure this matches your layout file name -->

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Search Results for "{{ $query }}"</h2>

        @if($products->count() > 0)
            <div class="row product-card-wrapper">
                @foreach($products as $product)
                    <div class="card text-center m-3" style="width: 18rem; height: 100%;">
                            <div class="card-img-container position-relative">
                                @php
                                    $images = json_decode($product->images, true);
                                @endphp
                                <div class="image-wrapper"
                                    style="height: 180px; display: flex; align-items: center; justify-content: center;">
                                    @if (!empty($images) && is_array($images))
                                        <img src="{{ asset($images[0]) }}" class="card-img-top img-fluid" alt="Product Image"
                                            style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    @else
                                        <img src="{{ asset('images/default.png') }}" class="card-img-top img-fluid"
                                            alt="Default Image" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    @endif
                                </div>
                                <a href="{{ route('productshow', ['id' => $product->id]) }}" class="quick-view-btn">Quick
                                    View</a>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"
                                    style="min-height: 48px; display: flex; align-items: center; justify-content: center;">
                                    {{ $product->name }}
                                </h5>
                                <p class="card-text">
                                    <span class="item_price"><b>${{ $product->price }}</b></span>
                                    <del>${{ $product->price + 50 }}</del>
                                </p>
                                <form action="{{ route('add.to.cart') }}" method="POST" class="mt-auto">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn btn-primary add-to-cart-btn w-100">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        @else
            <div class="alert alert-info mt-4">
                No products found matching your search.
            </div>
        @endif
    </div>
@endsection

@push('styles')
    
@endpush