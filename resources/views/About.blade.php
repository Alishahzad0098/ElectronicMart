@extends('layout')
@section('title', 'Electronic Mart')

@section('content')
    <div class="ab-top">
        <h1 class="text-center text-white" style="padding-top: 100px; font-size: 50px;">About Us</h1>
        <h5 class="text-center text-white" style="padding-bottom: 100px;"><a href="Homepage.html"
                class="text-white">Home</a> >> About Us </h5>
    </div>
    <!--  -->
    <!--  -->
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-6">
                <h3 class="fs-2 "><span class="fs-1 fw-bolder">We Work</span> for you best Success</h3>
                <p style="color: rgb(168, 168, 150);">Consectetur adipiscing elit. Aliquam sit amet
                    efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                    sapien.</p>
                <ul class="list-about-2 list-unstyled mt-sm-4 mt-3" style="color: rgb(168, 168, 150);">
                    <li class="py-1"><i class="fas fa-check-square mr-2" style="color: rgb(255, 153, 0);"></i>Ut enim ad
                        minim
                        veniam</li>
                    <li class="py-2"><i class="fas fa-check-square mr-2" style="color: rgb(255, 153, 0);"></i>Quis
                        nostrud
                        exercitation ullamco laboris</li>
                    <li class="py-1"><i class="fas fa-check-square mr-2" style="color: rgb(255, 153, 0);"></i>Nisi ut
                        aliquip ex
                        ea commodo consequat</li>
                </ul>
                <div class="mt-4">
                    <a href="#"><button class="btn btn-style text-white" style=" background-color: rgb(255, 153, 0);">View
                            Our Products</button></a>
                </div>
            </div>
            <div class="a2 col-lg-6" style="text-align: center;">
                <h1 class="number-text">28</h1>
                <span class="years-text">Years</span>
            </div>

        </div>
    </div>
    <div class="comments">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card my-5" style="max-width: 750px;">
                        <div class="row g-0">
                            <div class="card-body">
                                <p class="card-text"> <i class="fas fa-quote-left me-2"></i>Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Dicta consequatur quia in nobis magni veniam.
                                </p>
                            </div>
                            <div class="card-footer d-flex">
                                <img src="asset/carousel/testi2.jpg" alt="" style="border-radius: 50px; width: 75px;">
                                <p>
                                <h5 class="card-title mt-5">Petty Cruis</h5>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-5 " style="max-width: 750px;">
                        <div class="row g-0">
                            <div class="card-body">
                                <p class="card-text"> <i class="fas fa-quote-left me-2"></i>Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Dicta consequatur quia in nobis magni veniam.
                                </p>
                            </div>
                            <div class="card-footer d-flex">
                                <img src="asset/carousel/testi2.jpg" alt="" style="border-radius: 50px; width: 75px;">
                                <p>
                                <h5 class="card-title mt-5">Petty Cruis</h5>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection