<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-md p-4 text-white flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center">
            <img src="https://media.istockphoto.com/id/1446660540/de/vektor/bus-logo-design-vektor-reisebus-logo.jpg?s=1024x1024&w=is&k=20&c=9lLaMTLHrakxcmxI3FE2XHZnw7LYSL2Uvz5FA-vu3kQ=" alt="Logo" class="h-16 w-16 mr-2">
            <a href="#" class="text-lg font-semibold">My Logo</a>
        </div>

        <!-- Navigation Links -->
        <div class="space-x-4">
            <a href="/" class="text-gray-800  hover:text-gray-300">Home</a>
            <a href="/ticket" class="text-gray-800 hover:text-gray-300">Tickets</a>
            <a href="/travel" class="text-gray-800 hover:text-gray-300">Travel</a>
            <a href="/contact" class="text-gray-800 hover:text-gray-300">Contact Us</a>
        </div>

        <!-- Authentication Button -->
        <div class="flex gap-4">
            <a href="/login" class="bg-orange-500 hover:bg-orange-700 text-white  py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                Log In
            </a>
            <a href="/register" class="bg-orange-500 hover:bg-orange-700 text-white  py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                Register
            </a>
        </div>

    </nav>
    @yield('content')
      <footer class="bg-white  p-8">
        <div class="container mx-auto flex flex-wrap items-center justify-between">

            <!-- Company Info -->
            <div class="w-full md:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-2">Company Info</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- Quick Links -->
            <div class="w-full md:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
                <ul class="list-none p-0">
                    <li><a href="#" class="text-gray-900 hover:text-orange-700">FAQs</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-orange-700">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-orange-700">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="w-full md:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                <p>Email: info@example.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>

            <!-- Social Media -->
            <div class="w-full md:w-1/4">
                <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-900 hover:text-orange-700"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-900 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-900 hover:text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p>&copy; 2023 My App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>