@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $order as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->customer_name }}</td>
                    <td>{{ $products->number}}</td>
                    <td>{{ $products->customer_email }}</td>
                    <td>{{ $products->address }}</td>
                    <td>{{ $products->total_amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
