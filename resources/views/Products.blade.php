@extends('layout')

@section('title', 'Electronic Mart')

@section('content')
    <!-- navbar end -->
    <div class="newproducts mt-5 text-center">
        <h1>Our <span style="font-weight: 800;">New Products</span></h1>
    </div>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="computer-tab" data-bs-toggle="tab" data-bs-target="#computer-tab-pane"
                    type="button" role="tab" aria-controls="computer-tab-pane" aria-selected="true">Computers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile-tab-pane"
                    type="button" role="tab" aria-controls="mobile-tab-pane" aria-selected="false">Mobiles &
                    Tabs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="headphone-tab" data-bs-toggle="tab" data-bs-target="#headphone-tab-pane"
                    type="button" role="tab" aria-controls="headphone-tab-pane" aria-selected="false">Headphones</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="watches-tab" data-bs-toggle="tab" data-bs-target="#watches-tab-pane"
                    type="button" role="tab" aria-controls="watches-tab-pane" aria-selected="false">Watches</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Computers Tab -->
            <div class="tab-pane fade show active" id="computer-tab-pane" role="tabpanel" aria-labelledby="computer-tab"
                tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                           <div class="row product-card-wrapper">
                                @foreach ($product as $products)
                                    <div class="card text-center m-3" style="width: 18rem; height: 100%;">
                                        <div class="card-img-container position-relative">
                                            @php
                                                $images = json_decode($products->images, true);
                                            @endphp
                                            @if (!empty($images) && is_array($images))
                                                <img src="{{ asset($images[0]) }}" class="card-img-top" alt="Product Image">
                                            @else
                                                <img src="{{ asset('images/default.png') }}" class="card-img-top"
                                                    alt="Default Image">
                                            @endif
                                            <a href="{{ route('productshow', ['id' => $products->id]) }}"
                                                class="quick-view-btn">Quick View</a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $products->name }}</h5>
                                            <p class="card-text">
                                                <span class="item_price"><b>${{ $products->price }}</b></span>
                                                <del>${{ $products->price + 50 }}</del>
                                            </p>
                                            <form action="{{ route('add.to.cart') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" class="btn btn-primary add-to-cart-btn">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div> 
                            <nav aria-label="Computer products pagination" class="mt-4">
                                {{ $product->withQueryString()->links('vendor.pagination.bootstrap-5') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobiles Tab -->
            <div class="tab-pane fade" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row product-card-wrapper">
                            @foreach ($p2 as $products)
                                <div class="card text-center m-3" style="width: 18rem; height: 100%;">
                                    <div class="card-img-container position-relative">
                                        @php
                                            $images = json_decode($products->images, true);
                                        @endphp
                                        <div class="image-wrapper"
                                            style="height: 180px; display: flex; align-items: center; justify-content: center;">
                                            @if (!empty($images) && is_array($images))
                                                <img src="{{ asset($images[0]) }}" class="card-img-top img-fluid"
                                                    alt="Product Image"
                                                    style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('images/default.png') }}" class="card-img-top img-fluid"
                                                    alt="Default Image"
                                                    style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                            @endif
                                        </div>
                                        <a href="{{ route('productshow', ['id' => $products->id]) }}"
                                            class="quick-view-btn">Quick View</a>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title"
                                            style="min-height: 48px; display: flex; align-items: center; justify-content: center;">
                                            {{ $products->name }}
                                        </h5>
                                        <p class="card-text">
                                            <span class="item_price"><b>${{ $products->price }}</b></span>
                                            <del>${{ $products->price + 50 }}</del>
                                        </p>
                                        <form action="{{ route('add.to.cart') }}" method="POST" class="mt-auto">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn btn-primary add-to-cart-btn w-100">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <nav aria-label="Mobile products pagination" class="mt-4">
                            {{ $p2->withQueryString()->links('vendor.pagination.bootstrap-5') }}
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Headphones Tab -->
            <div class="tab-pane fade" id="headphone-tab-pane" role="tabpanel" aria-labelledby="headphone-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row product-card-wrapper">
                            @foreach ($p3 as $products)
                                <div class="card text-center m-3" style="width: 18rem;">
                                    <div class="card-img-container position-relative">
                                        @php
                                            $images = json_decode($products->images, true);
                                        @endphp
                                        @if (!empty($images) && is_array($images))
                                            <img src="{{ asset($images[0]) }}" class="card-img-top" alt="Product Image">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                                        @endif
                                        <a href="{{ route('productshow', ['id' => $products->id]) }}"
                                            class="quick-view-btn">Quick View</a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $products->name }}</h5>
                                        <p class="card-text">
                                            <span class="item_price"><b>${{ $products->price }}</b></span>
                                            <del>${{ $products->price + 50 }}</del>
                                        </p>
                                        <form action="{{ route('add.to.cart') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn btn-primary add-to-cart-btn">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <nav aria-label="Headphone products pagination" class="mt-4">
                            {{ $p3->withQueryString()->links('vendor.pagination.bootstrap-5') }}
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Watches Tab -->
            <div class="tab-pane fade" id="watches-tab-pane" role="tabpanel" aria-labelledby="watches-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row product-card-wrapper">
                            @foreach ($p4 as $products)
                                <div class="card text-center m-3" style="width: 18rem;">
                                    <div class="card-img-container position-relative">
                                        @php
                                            $images = json_decode($products->images, true);
                                        @endphp
                                        @if (!empty($images) && is_array($images))
                                            <img src="{{ asset($images[0]) }}" class="card-img-top" alt="Product Image">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                                        @endif
                                        <a href="{{ route('productshow', ['id' => $products->id]) }}"
                                            class="quick-view-btn">Quick View</a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $products->name }}</h5>
                                        <p class="card-text">
                                            <span class="item_price"><b>${{ $products->price }}</b></span>
                                            <del>${{ $products->price + 50 }}</del>
                                        </p>
                                        <form action="{{ route('add.to.cart') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn btn-primary add-to-cart-btn">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <nav aria-label="Watch products pagination" class="mt-4">
                            {{ $p4->withQueryString()->links('vendor.pagination.bootstrap-5') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection