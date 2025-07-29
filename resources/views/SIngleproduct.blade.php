<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Mart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" href="favicon/icons8-cart.gif">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<style>
    .product-carousel-image-container {
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .product-carousel-image {
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
    }

    /* Carousel Controls */
    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(0, 0, 0, 0.1);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev {
        left: 15px;
    }

    .carousel-control-next {
        right: 15px;
    }

    /* Product Info Styling */
    .item_price {
        font-weight: 700;
        font-size: 1.5rem;
    }

    .add-to-cart-btn {
        background-color: rgb(255, 153, 0);
        border: none;
        transition: all 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: rgb(230, 138, 0);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-description {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
    }
</style>

<body>
      <div class="container mt-2 text-secondary ">
        <div class="d-flex flex-wrap align-items-center justify-content-between px-2">
            <h5 class="mb-2 mb-md-0" style="margin-left: 10px;">
                Welcome to Electronic Mart
            </h5>

            <div class="d-flex flex-wrap align-items-center" style="margin-right: 10px;">
                {{-- Show if user is NOT logged in --}}
                @guest
                    <a href="{{ route('loginpage') }}" class="text-secondary text-decoration-none me-3">
                        <h6 class="mb-0">
                            <i class="fa-solid fa-right-to-bracket me-1"></i> Login
                        </h6>
                    </a>
                    <a href="{{ route('view') }}" class="text-secondary text-decoration-none">
                        <h6 class="mb-0">
                            <i class="fa-solid fa-circle-user me-1"></i> Register
                        </h6>
                    </a>
                @endguest

                {{-- Show if user IS logged in --}}
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link text-secondary text-decoration-none p-0">
                            <h6 class="mb-0">
                                <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                            </h6>
                        </button>
                    </form>
                @endauth
            </div>

        </div>
    </div>

    <hr>
    <div class="brand container">
        <div class="row">
            <div class="col-lg-3">
                <h3><span style="color: rgb(255, 153, 0); font-size: 50px;">E</span>lectronic <span
                        style="color: rgb(255, 153, 0); font-size: 50px;">M</span>art</h3>
            </div>
            <div class="col-lg-6 mx-auto mt-3" style="max-width: 600px;">
                <div class="d-flex align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; overflow: hidden;">
                    <input type="search" class="form-control border-0" placeholder="Search products, brands and more">
                    <button class="btn"><i class="fa-solid fa-magnifying-glass px-3 py-2"
                            style="background-color: rgb(255, 153, 0); color: white; cursor: pointer; border-radius: 4px;"></i></button>
                </div>
            </div>
            <div class="col-lg-3 text-center mt-3" style="font-size: x-large;">
                <p>
                    <i class="fa-regular fa-moon "></i>
                    <i class="far fa-heart ms-3"></i>
                    <a href="{{ route('cart.show') }} ">
                        <i class="fa-solid fa-cart-shopping ms-3 text-black"></i></a>
                </p>
            </div>
        </div>

    </div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg mt-3" style="background-color: rgb(76, 76, 184); font-weight: 500;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <div class="container ms-5">
                            <select class="form-select text-white " aria-label="All categories"
                                style="width: 200px; cursor: pointer; background-color:rgb(76, 76, 184) ;">
                                <option selected>All categories</option>
                                <option value="television">Television</option>
                                <option value="headphone">Headphone</option>
                                <option value="computers">Computers</option>
                                <option value="appliances">Appliances</option>
                                <option value="tv-video">TV & video</option>
                                <option value="ipads-tablets">iPads & Tablets</option>
                            </select>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
            </div>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="ab-top">
        <h1 class="text-center text-white" style="padding-top: 100px; font-size: 50px;">Products</h1>
        <h5 class="text-center text-white" style="padding-bottom: 100px;"><a href="Homepage.html"
                class="text-white">Home</a> >> Single Product</h5>
    </div>
    <!--  -->
    <!--  -->
    <div class="newproducts mt-5 text-center">
        <h1>Our <span style="font-weight: 800;">Single Product</span></h1>
    </div>
    <div class="product">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-5">
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="background-color: #f8f9fa; border-radius: 8px;">
                            @php
                                $images = json_decode($product->images, true);
                            @endphp

                            @if ($images && is_array($images))
                                @foreach ($images as $index => $image)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="product-carousel-image-container">
                                            <img src="{{ asset($image) }}" class="product-carousel-image" alt="Product Image">
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item active">
                                    <div class="product-carousel-image-container">
                                        <img src="{{ asset('images/default.png') }}" class="product-carousel-image"
                                            alt="No Image">
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if ($images && count($images) > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="single-right-left simpleCart_shelfItem">
                        <h3 class="mb-3 fw-bolder">{{ $product->name }}</h3>
                        <p class="mb-3 fw-semibold fs-5">
                            <span class="item_price text-warning">${{ $product->price }}</span>
                            <del class="mx-2 font-weight-light text-muted">${{ $product->price + 40 }}</del>
                            <span class="badge bg-danger ms-2">Save $40</span>
                        </p>

                        <ul class="text-muted">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Cash on Delivery
                                Eligible</li>
                            <li class="mb-2"><i class="fas fa-shipping-fast text-primary me-2"></i>Fast Shipping</li>
                        </ul>

                        <hr>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-shield-alt text-warning me-2 fs-5"></i>
                            <span>1 Year Manufacturer Warranty</span>
                        </div>

                        <div class="product-description mb-4">
                            <h5 class="fw-semibold">Description:</h5>
                            <p>{{ $product->description }}</p>
                        </div>

                        <form action="{{ route('add.to.cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-warning text-white add-to-cart-btn px-4 py-2">
                                <i class="fas fa-cart-plus me-2"></i>Add To Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container py-5">
            <div class="row ">
                <div class="col-lg-3">
                    <h3 style="font-weight: 900;">Categories</h3>
                    <ul>
                        <li class="mb-3">
                            <a href="product.html">Mobiles </a>
                        </li>
                        <li class="mb-3">
                            <a href="product.html">Computers</a>
                        </li>
                        <li class="mb-3">
                            <a href="product.html">TV, Audio</a>
                        </li>
                        <li class="mb-3">
                            <a href="product2.html">Smartphones</a>
                        </li>
                        <li class="mb-3">
                            <a href="product.html">Washing Machines</a>
                        </li>
                        <li>
                            <a href="product2.html">Refrigerators</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="mb-3" style="font-weight: 900;">Quick Links</h3>
                    <ul>
                        <li class="mb-3">
                            <a href="about.html">About Us</a>
                        </li>
                        <li class="mb-3">
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li class="mb-3">
                            <a href="help.html">Help</a>
                        </li>
                        <li class="mb-3">
                            <a href="faqs.html">Faqs</a>
                        </li>
                        <li class="mb-3">
                            <a href="terms.html">Terms of use</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="mb-3" style="font-weight: 900;">Get in Touch</h3>
                    <ul>
                        <li class="mb-3">
                            <i class="fas fa-map-marker"></i> Mkc, 123 Sebastian, USA.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-mobile"></i><a href="tel:+12 23456790"> 12 2345 6790</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone"></i><a href="tel:+11 36721890">+11 3672 1890</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope-open"></i>
                            <a href="/cdn-cgi/l/email-protection#fe9b869f938e929bbe939f9792d09d9193"> mail <span
                                    class="__cf_email__"
                                    data-cfemail="7c4d3c19041d110c1019521f1311">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <a href=""> mail [protected]</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="mb-3">Newsletter</h3>
                    <p class="mb-3">Free Delivery on your first order!</p>
                    <form action="#" method="post">
                        <div class="form-group d-flex">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            <button type="submit" class="btn text-white"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <!-- //newsletter -->
                    <!-- social icons -->
                    <div class="footer-grids  w3l-socialmk mt-3">
                        <h3 class="mb-3">Follow Us on</h3>
                        <div class="social">
                            <ul class="d-flex ">
                                <li class="px-3">
                                    <a class="icon fb" href="#facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="px-3">
                                    <a class="icon tw" href="#twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="px-3">
                                    <a class="icon gp" href="#google-plus">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.min.js"
    integrity="sha512-y8/3lysXD6CUJkBj4RZM7o9U0t35voPBOSRHLvlUZ2zmU+NLQhezEpe/pMeFxfpRJY7RmlTv67DYhphyiyxBRA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
    integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const inner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function updateCarousel() {
        inner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
    });
</script>

</html>