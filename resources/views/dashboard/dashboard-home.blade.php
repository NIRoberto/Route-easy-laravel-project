@extends('layout.dashboard')

@section('content')

<div class="h-screen w-full border    p-8 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4">Dashboard Statistics</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-blue-500 text-white p-4 rounded-md">
            <i class="fas fa-users fa-2x mb-2"></i>
            <p class="text-lg font-semibold">Total Users</p>
            <p class="text-sm">1,234</p>
        </div>
        <div class="bg-green-500 text-white p-4 rounded-md">
            <i class="fas fa-chart-line fa-2x mb-2"></i>
            <p class="text-lg font-semibold">Revenue</p>
            <p class="text-sm">$50,000</p>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-md">
            <i class="fas fa-shopping-cart fa-2x mb-2"></i>
            <p class="text-lg font-semibold">Total Sales</p>
            <p class="text-sm">500</p>
        </div>
    </div>
</div>
@endsection