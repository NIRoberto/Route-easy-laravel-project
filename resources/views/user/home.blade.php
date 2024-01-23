
@extends('layout.user')

@section('content')


   <!-- Hello Screen -->
    <div class="container  mx-auto flex items-center justify-center p-16">

        <!-- Left Section - Search Form -->
        <div class="w-full md:w-1/2 pr-8">
            <h1 class="text-4xl font-bold mb-6">Hello, Welcome to My Bus Service!</h1>

            <!-- Search Form -->
             <form class="flex flex-col space-y-4">
                <input type="text" placeholder="From" class="border p-2">
                <input type="text" placeholder="To" class="border p-2">
                <input type="date" placeholder="Date" class="border p-2">
                <input type="number" placeholder="Number of Passengers" class="border p-2">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
            </form>
        </div>

        <!-- Right Section - Image -->
        <div class="hidden md:block w-1/2">
            <img src="https://media.istockphoto.com/id/1134018636/photo/handsome-smiling-young-man-getting-into-bus.jpg?s=612x612&w=0&k=20&c=sViHTT89eDEc0aU7h-1sV7qT8RqT7XlqtgFFBoFpo4k=" alt="Bus Image" class="w-full h-full object-cover rounded-lg">
        </div>

    </div>


@endsection