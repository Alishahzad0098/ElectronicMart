@extends('layout')

@section('title', 'Electronic Mart')

@section('content')
    <!-- navbar end -->
    <div class="ab-top">
        <h1 class="text-center text-white" style="padding-top: 100px; font-size: 50px;">Products</h1>
        <h5 class="text-center text-white" style="padding-bottom: 100px;"><a href="Homepage.html"
                class="text-white">Home</a> >> Checkout </h5>
    </div>
    <!--  -->
    <!--  -->
    <div class="container">
        <div class=" mt-5 text-center">
            <h1><span style="font-weight: 800;">Add New Details</span></h1>
        </div>

        <form action="{{ route('checkout') }}" method="POST" class="my-5 ">
            @csrf
            <label for="">Your Name</label>
            <input class="form-control form-control-lg bg-light w-auto" type="text" placeholder="Full Name"
                aria-label="default input example" name="name" id="name">
            <label for="">Mobile Number</label>
            <input class="form-control form-control-lg bg-light w-auto" type="number" placeholder="Mobile Number "
                aria-label="default input example" name="number" id="number">
            <label for="">Email</label>
            <input class="form-control form-control-lg bg-light w-auto" type="email" placeholder="Email "
                aria-label="default input example" name="email" id="email">
            <label for="">Address</label>
            <input class="form-control form-control-lg bg-light w-auto" type="text" placeholder="Address"
                aria-label="default input example" name="address" id="address">
            <!-- <label for="">City</label>
            <input class="form-control form-control-lg bg-light w-auto" type="text" placeholder="City" aria-label="default input example"> -->
            <div class="payment mt-3">
                <h3 class="fw-bolder"> Payment Method</h3>
                <input type="radio" class="me-3" placeholder="" value="COD" name="payment" id="payment">Cash On Delivery
            </div>
            <button type="submit" class="btn text-white mt-4" style="background-color: rgb(255, 153, 0);">Place Your
                Order</button>
        </form>
    </div>
   @endsection