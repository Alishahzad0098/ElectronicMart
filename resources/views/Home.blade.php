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
    <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>

<body>
    <div class="container mt-2 text-secondary ">
        <div class="d-flex flex-wrap align-items-center justify-content-between px-2">

            <h5 class="mb-2 mb-md-0" style="margin-left: 10px;">
                Welcome to Electronic Mart
            </h5>

            <div class="d-flex flex-wrap align-items-center" style="margin-right: 10px;">
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
                    <i class="fa-solid fa-cart-shopping ms-3"></i>
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

    <div id="carouselExampleFade" class="carousel slide carousel-fade d-" style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="carousel-inner ">
                @foreach ($c1 as $products)
                    <div class="carousel-item active pt-5 d-flex">
                        <img src="{{ asset('images/' . $products->img) }}" class="d-block w-100" alt="Carousel Image">
                        <div class="carousel-caption ps-4 mb-5 align-self-center">
                            <h5 style="font-size:30px; font-weight: 700;">{{ $products->para }}</h5>
                            <button class="btn btn-outline-warning bg-warning text-white px-5 pt-3 pb-3 ">Shop Now</button>
                        </div>
                    </div>

                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i
                        class="fa-solid fa-circle-chevron-left text-black fs-3"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
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
                        <a href="#" class="text-black text-decoration-none">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black text-decoration-none">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>4.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black text-decoration-none">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <span>3.5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black text-decoration-none">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>3.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black text-decoration-none">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <span>2.5</span>
                        </a>
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
                        <input type="checkbox" class="checked">
                        <span class="span">Accessories</span>
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
                        <div class="card text-center m-3" style="width: 18rem;">
                            <div class="card-img-container position-relative">
                                @php
                                    $images = json_decode($products->images, true); // decode JSON string to PHP array
                                @endphp
                                @if (!empty($images) && is_array($images))
                                    <img src="{{ asset($images[0]) }}" class="card-img-top" alt="Product Image">
                                @else
                                    <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                                @endif
                                <button class="quick-view-btn">Quick
                                    View</button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $products->name }}</h5>
                                <p class="card-text">
                                    <span class="item_price"><b>${{ $products->price }}</b></span>
                                    <del>${{ $products->price+ 50 }}</del>
                                </p>
                                <a href="#" class="btn btn-primary add-to-cart-btn">Add To Cart</a>
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
    <div class="para container my-5">
        <h3 style="font-weight: 800;">ELECTRONICS</h3>
        <p style="color: rgb(168, 168, 150);">If you're considering a new laptop, looking for a powerful new car stereo
            or shopping
            for a new HDTV, we make it easy to find exactly what you need at a price you can afford. We offer Every Day
            Low Prices on TVs, laptops, cell phones, tablets and iPads, video games, desktop computers, cameras and
            camcorders, audio, video and more.</p>
    </div>
    <div class="a1 container">
        <div class="row">
            <div class="col-lg-4 d-flex">
                <i class="fas fa-dolly" style="font-size: 60px; color: rgb(255, 153, 0);"></i>
                <div class="para ml-5">
                    <h3>Free Shipping</h3>
                    <p>on orders over $100</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <i class="fas fa-shipping-fast" style="font-size: 60px; color: rgb(255, 153, 0);"></i>
                <div class="para ml-5">
                    <h3>Fast Delivery</h3>
                    <p>Worldwide</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <i class="far fa-thumbs-up" style="font-size: 60px; color: rgb(255, 153, 0);"></i>
                <div class="para ml-5">
                    <h3>Big Choice</h3>
                    <p>of Products</p>
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
                        *
                    </div>
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

</html>