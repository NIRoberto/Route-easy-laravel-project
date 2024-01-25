
@extends('layout.auth')

@section('content')
<div class="font-sans flex items-center justify-center h-screen bg-white">

    <!-- Left Section - Login Form -->
    <div class="w-full  md:w-1/2 p-8">
        {{-- <a href="/" class="bg-orange-500 hover:bg-orange-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to Home</a> --}}


        <h1 class="text-4xl font-bold mb-6">Create an account here</h1>

        <!-- Login Form -->
        <form class="flex flex-col space-y-4">

        <label class="text-gray-800">Names</label>
            <input type="text" placeholder="Full names" class="border p-2">
               <label class="text-gray-800">Email</label>
            <input type="Email" placeholder="email" class="border p-2">
               <label class="text-gray-800">Password</label>
            <input type="password" placeholder="Password" class="border p-2">
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
        </form>

        <p
          class="mt-8"
        >
            Already have an account?

            <a href="/login" class="text-orange-600">
             Login
            </a>
        </p>
        
    </div>

    <!-- Right Section - Orange Background with Text -->
    <div class="hidden h-screen justify-center items-center flex md:block w-1/2 bg-orange-500 p-8 text-white">
        <h2 class="text-3xl font-semibold mb-4">Unlock the full potential!
            <a href="/login">
                Login
            </a>
        </h2>
        <p class="text-lg">Join us now and experience a new world of possibilities.</p>
    </div>

</div>

@endsection