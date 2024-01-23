

@extends('layout.user')

@section('content')


<div class="font-sans bg-gray-100 ">

    <!-- Search Form Section -->
    <div class="container mx-auto mt-8 mb-4 p-16">
        <form class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Search for Travel Options</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div>
                    <label for="origin" class="block text-gray-700 text-sm font-bold mb-2">Origin</label>
                    <input type="text" id="origin" name="origin" class="border p-2 w-full" placeholder="Enter origin">
                </div>
                <div>
                    <label for="destination" class="block text-gray-700 text-sm font-bold mb-2">Destination</label>
                    <input type="text" id="destination" name="destination" class="border p-2 w-full" placeholder="Enter destination">
                </div>
                <div>
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Depature data</label>
                    <input type="text" id="date" name="data" class="border p-2 w-full" placeholder="Enter date">
                </div>
                <div class="">
                    <label for="passengers" class="block text-gray-700 text-sm font-bold mb-2">Search</label>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Travel Cards Section -->
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4  px-16">
        <!-- Sample Travel Card (Repeat as needed) -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Travel Option 1</h2>
            <p class="text-gray-600 mb-4">Experience a wonderful journey to your destination!</p>
            <p class="text-orange-500 font-bold">Departure: 2023-12-15</p>
            <p class="text-green-500 font-bold">Price: $100.00</p>
        </div>

               <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Travel Option 1</h2>
            <p class="text-gray-600 mb-4">Experience a wonderful journey to your destination!</p>
            <p class="text-orange-500 font-bold">Departure: 2023-12-15</p>
            <p class="text-green-500 font-bold">Price: $100.00</p>
        </div>       <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Travel Option 1</h2>
            <p class="text-gray-600 mb-4">Experience a wonderful journey to your destination!</p>
            <p class="text-orange-500 font-bold">Departure: 2023-12-15</p>
            <p class="text-green-500 font-bold">Price: $100.00</p>
        </div>       <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Travel Option 1</h2>
            <p class="text-gray-600 mb-4">Experience a wonderful journey to your destination!</p>
            <p class="text-orange-500 font-bold">Departure: 2023-12-15</p>
            <p class="text-green-500 font-bold">Price: $100.00</p>
        </div>       <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Travel Option 1</h2>
            <p class="text-gray-600 mb-4">Experience a wonderful journey to your destination!</p>
            <p class="text-orange-500 font-bold">Departure: 2023-12-15</p>
            <p class="text-green-500 font-bold">Price: $100.00</p>
        </div>
        <!-- Add more travel cards as needed -->

    </div>

</div>

@endsection
