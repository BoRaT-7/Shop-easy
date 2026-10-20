
@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

    <h1 class="fw-bold mb-4">Dashboard</h1>

    <!-- Stat cards -->
    <div class="row g-4">

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm bg-primary text-white text-center p-4">
                <h5>Total Orders</h5>
                <h2>{{ $totalOrders ?? 15 }}</h2>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm bg-warning text-dark text-center p-4">
                <h5>Total Commission</h5>
                <h2>₹ {{ number_format($totalCommission ?? 10699, 2) }}</h2>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm bg-danger text-white text-center p-4">
                <h5>Total Users</h5>
                <h2>{{ $totalUsers ?? 50 }}</h2>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm bg-info text-dark text-center p-4">
                <h5>Total Vendors</h5>
                <h2>{{ $totalVendors ?? 25 }}</h2>
            </div>
        </div>

    </div>

    <!-- Keep your existing Recent Orders heading and table here -->

@endsection
