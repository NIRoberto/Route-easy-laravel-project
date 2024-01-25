
@extends('layout.auth')

@section('content')
<div class="font-sans flex items-center justify-center h-screen bg-white">
    
    <!-- Left Section - Login Form -->
    <div class="w-full  md:w-1/2 p-8">
        
        
        <h1 class="text-4xl font-bold mb-6">Welcome Back!</h1>

        <!-- Login Form -->
        <form class="flex flex-col space-y-4">
            <label class="text-gray-800"> Email</label>
            <input type="text" placeholder="Email" class="border p-2">

                  <label class="text-gray-800">
                    Password
            </label>
            <input type="password" placeholder="Password" class="border p-2">
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white  py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        </form>

        <p
          class="mt-8"
        >
            Don't have an account create here

            <a href="/register" class="text-orange-600">
             Register
            </a>
        </p>
    </div>
    <!-- Right Section - Orange Background with Text -->
    <div class="hidden md:block w-1/2 h-screen bg-orange-500 p-8 text-white">
        <h2 class="text-3xl font-semibold mb-4">Don't have an account?
         <a href="/register">
         Register
        </a>
        </h2>
        <p class="text-lg">Join our community and explore amazing features!</p>
    </div>

</div>

@endsection