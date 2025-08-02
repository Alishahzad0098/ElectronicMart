@extends('layout')

@section('title', 'Electronic Mart')

@section('content')
    <!-- navbar end -->
    <div class="ab-top">
        <h1 class="text-center text-white" style="padding-top: 100px; font-size: 50px;">Checkout</h1>
        <h5 class="text-center text-white" style="padding-bottom: 100px;"><a href="Homepage.html"
                class="text-white">Product</a> >> Cart </h5>
    </div>
    <!--  -->
    <!--  -->
    <div class="container">
        @php $count = 1; @endphp
        <div class=" mt-5 text-center">
            <h1><span style="font-weight: 800;">Your Shopping Cart has: $count Products</span></h1>
        </div>

        <table class="table table-light table-bordered table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @php $count = 1; @endphp
                @foreach(session('cart', []) as $id => $item)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>
                            @if(!empty($item['images'][0]))
                                <img src="{{ asset($item['images'][0]) }}" width="60">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ $item['price'] }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove', $id) }}">
                                @csrf
                                <button class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('checkoutpage') }}" class="btn btn-warning my-5">Proceed to Checkout</a>
    </div>
  @endsection