@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to Dashboard</h1>
    <p>You are logged in as {{ Auth::user()->name }}</p>
@endsection
