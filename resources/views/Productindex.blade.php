@extends('layout') {{-- Or your main layout --}}

@section('content')
    <div class="container mt-4">

        {{-- (Optional) Place the filter here too if you want it on this page --}}
        {{-- @include('partials.category-filter') --}}

        <div class="row">
            @forelse($products as $product)
                <div class="row product-card-wrapper">
                    @forelse ($products as $product)
                        <div class="col-md-4">
                            <div class="card text-center m-3" style="width: 18rem; height: 100%;">
                                <div class="card-img-container position-relative">
                                    @php $images = json_decode($product->images, true); @endphp
                                    @if (!empty($images) && is_array($images))
                                        <img src="{{ asset($images[0]) }}" class="card-img-top" alt="Product Image">
                                    @else
                                        <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                                    @endif
                                    <a href="{{ route('productshow', ['id' => $product->id]) }}" class="quick-view-btn">
                                        Quick View
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">
                                        <span class="item_price"><b>${{ $product->price }}</b></span>
                                        <del>${{ $product->price + 50 }}</del>
                                    </p>
                                    <form action="{{ route('add.to.cart') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-primary add-to-cart-btn">
                                            Add To Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No products found.</p>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-4">
                    {{ $products->withQueryString()->links() }}
                </div>

            @empty
                <p class="text-center">No products found.</p>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
@endsection