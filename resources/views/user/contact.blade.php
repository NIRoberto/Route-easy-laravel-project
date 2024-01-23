
@extends('layout.user')

@section('content')


<div class="font-sans bg-white">

    <!-- Contact Form Section -->
    <div class="container mx-auto flex items-center justify-center py-8">

        <!-- Left Section - Contact Form -->
        <div class="w-full md:w-1/2 p-8">
            <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
            <!-- Contact Form -->
            <form class="grid grid-cols-1 gap-4">
                <div>
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="border p-2 w-full" placeholder="Enter your name">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="border p-2 w-full" placeholder="Enter your email">
                </div>
                <div>
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea id="message" name="message" class="border p-2 w-full h-32" placeholder="Type your message"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                </div>
            </form>
        </div>
        <!-- Right Section - Image -->
        <div class="hidden md:block w-1/2">
            <img src="https://st3.depositphotos.com/1385248/14794/i/450/depositphotos_147947683-stock-photo-hands-with-contact-us-words.jpg" alt="Contact Image" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>
</div>
@endsection