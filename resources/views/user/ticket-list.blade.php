
@extends('layout.user')

@section('content')

<body class="font-sans bg-gray-100">

    <!-- Ticket List Section -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">Ticket List</h2>

        <!-- Ticket Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Sample Ticket Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Concert Ticket</h3>
                <p class="text-gray-600 mb-4">Enjoy a live concert experience!</p>
                <p class="text-blue-500 font-bold">Status: Available</p>
                <p class="text-green-500 font-bold">Price: $50.00</p>
            </div>
                   <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Concert Ticket</h3>
                <p class="text-gray-600 mb-4">Enjoy a live concert experience!</p>
                <p class="text-blue-500 font-bold">Status: Available</p>
                <p class="text-green-500 font-bold">Price: $50.00</p>
            </div>       <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Concert Ticket</h3>
                <p class="text-gray-600 mb-4">Enjoy a live concert experience!</p>
                <p class="text-blue-500 font-bold">Status: Available</p>
                <p class="text-green-500 font-bold">Price: $50.00</p>
            </div>       <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Concert Ticket</h3>
                <p class="text-gray-600 mb-4">Enjoy a live concert experience!</p>
                <p class="text-blue-500 font-bold">Status: Available</p>
                <p class="text-green-500 font-bold">Price: $50.00</p>
            </div>       <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Concert Ticket</h3>
                <p class="text-gray-600 mb-4">Enjoy a live concert experience!</p>
                <p class="text-blue-500 font-bold">Status: Available</p>
                <p class="text-green-500 font-bold">Price: $50.00</p>
            </div>

            <!-- Add more ticket cards as needed -->
        </div>
    </div>

</body>

@endsection