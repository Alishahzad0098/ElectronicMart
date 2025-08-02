@extends('layout')

@section('title', 'Electronic Mart')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-" style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="carousel-inner ">
                @foreach ($c1 as $products)
                    <div class="carousel-item active pt-5 d-flex">
                        <img src="{{ asset('images/' . $products->img) }}" class="d-block w-100" style="height:50%"
                            alt="Carousel Image">
                        <div class="carousel-caption ps-4 mb-5 align-self-center">
                            <h5 style="font-size:30px; font-weight: 700;">{{ $products->para }}</h5>
                            <a href="{{ route('productshow') }}"> <button
                                    class="btn btn-outline-warning bg-warning text-white px-5 pt-3 pb-3 ">Shop
                                    Now</button></a>
                        </div>
                    </div>

                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i
                        class="fa-solid fa-circle-chevron-left text-black fs-3"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i
                        class="fa-solid fa-circle-chevron-right text-black fs-3"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- carousel end -->
    <div class="newproducts mt-5 text-center">
        <h1>Our <span style="font-weight: 800;">New Products</span></h1>
    </div>
    <!-- side bar  -->
    <div class="sidebar container ">
        <div class="row">
            <div class="col-lg-3 pt-3 d-none d-lg-block" style="background-color: beige;">
                <h3>CUSTOMER REVIEW</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked" id="rating5">
                        <label for="rating5">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i> 5.0
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" id="rating4">
                        <label for="rating4">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i> 4.0
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" id="rating3_5">
                        <label for="rating3_5">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i> 3.5
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" id="rating3">
                        <label for="rating3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 3.0
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" id="rating2_5">
                        <label for="rating2_5">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> 2.5
                        </label>
                    </li>
                </ul>
                <h3 class="mt-3">PRICES</h3>
                <ul class="text-black text-decoration-none">
                    <li>
                        <a href="#">Under $1,000</a>
                    </li>
                    <li class="my-1">
                        <a href="#">$1,000 - $5,000</a>
                    </li>
                    <li>
                        <a href="#">$5,000 - $10,000</a>
                    </li>
                    <li class="my-1">
                        <a href="#">$10,000 - $20,000</a>
                    </li>
                    <li>
                        <a href="#">$20,000 $30,000</a>
                    </li>
                    <li class="mt-1">
                        <a href="#">Over $30,000</a>
                    </li>
                </ul>
                <h3 class="mt-3">DISCOUNTS</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">5% or More</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">10% or More</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">20% or More</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">30% or More</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">50% or More</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">60% or More</span>
                    </li>
                </ul>
                <h3>ELECTRONICS</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked" id="accessories">
                        <label for="accessories">Accessories</label>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Cameras & Photography</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Car & Vehicle Electronics</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Computers & Accessories</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">GPS & Accessories</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Headphones</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Home Audio</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Home Theater, TV & Video</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Mobiles & Accessories</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Portable Media Players</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Tablets</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Telephones & Accessories</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Wearable Technology</span>
                    </li>
                </ul>
                <h3>CASH ON DELIVERY</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Eligible for Cash on Delivery</span>
                    </li>
                </ul>
                <h3> NEW ARRIVALS</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Last 30 days</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Last 90 days</span>
                    </li>
                </ul>
                <h3>BEST SELLERS</h3>
                <div class="scroll-container" style="height: 300px; overflow: hidden; position: relative;">
                    <div class="scroll-content"
                        style="position: absolute; width: 100%; animation: scrollUp 20s linear infinite;">
                        <!-- Your existing content -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="asset/carousel/k3.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a>
                                <a href="" class="price-mar mt-2">$12,990.00</a>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="asset/carousel/k2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">Samsung 192 L Direct Cool Single Door 3 Star (2021) Refrigerator</a>
                                <a href="" class="price-mar mt-2">$12,499.00</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="asset/carousel/k3.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">boAt Rockerz 450 Bluetooth Headset (Luscious Black, On the Ear)</a>
                                <a href="" class="price-mar mt-2">$1,199.00 </a>
                            </div>
                        </div>
                        <!-- Optional: Duplicate content for seamless looping -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="asset/carousel/k3.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a>
                                <a href="" class="price-mar mt-2">$12,990.00</a>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="asset/carousel/k2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">Samsung 192 L Direct Cool Single Door 3 Star (2021) Refrigerator</a>
                                <a href="" class="price-mar mt-2">$12,499.00</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row product-card-wrapper">
                    @foreach ($product as $products)
                        <div class="card text-center m-3" style="width: 18rem; height: 100%;">
                            <div class="card-img-container position-relative">
                                @php
                                    $images = json_decode($products->images, true);
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
                                <a href="{{ route('productshow', ['id' => $products->id]) }}" class="quick-view-btn">Quick
                                    View</a>
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
            </div>
        </div>
    </div>
    <div class="bgtrans bg-transparent py-5 mt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card mb-3 py-3" style="width: 30rem;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="asset/carousel/off1.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">New Collection,New Trendy <br>
                                        <span style="font-weight: 800;">
                                            <h1 style="font-weight: 800;">Smart Watches</h1>
                                        </span>
                                        Sale upto 25% OFF
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3 py-3" style="width: 30rem;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="asset/carousel/off1.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">New Collection,New Trendy <br>
                                        <span style="font-weight: 800;">
                                            <h1 style="font-weight: 800;">Smart Watches</h1>
                                        </span>
                                        Sale upto 25% OFF
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection