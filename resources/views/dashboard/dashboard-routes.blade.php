

@extends('layout.dashboard')

@section('content')


       @php
            // Manually generate routes covering the whole day for testing
            $generatedRoutes = [];
            $hours = range(8, 20); // Routes from 8 AM to 8 PM

            foreach ($hours as $hour) {
                $time = sprintf("2024-01-24 %02d:00:00", $hour);
                $generatedRoutes[] = [
                    'agency' => 'Amazing Travels',
                    'origin' => 'Kigali',
                    'destination' => 'Gisenyi',
                    'price' => '50,000 RWF',
                    'departure_time' => $time,
                ];
            }
        @endphp
    <div class="flex flex-col gap-8 p-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl">Add New Route</h1>
    </div>

    <div
        class="
             flex   gap-8
        "
    >

    <!-- Add Route Form -->
    <form action="" method="post" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md  h-screen ">
        @csrf
        <h1
            class="
                text-2xl
                font-semibold
                mb-4
            "
        >
              Fill the form to add Route
        </h1>
        <div class="mb-4">
            <label for="agency" class="block text-sm font-medium text-gray-600">Travel Agency:</label>
            <select id="agency" name="agency" class="mt-1 p-2 border rounded-md w-full">
                <option value="Rwanda Explorers">Rwanda Explorers</option>
                <option value="Serene Tours">Serene Tours</option>
                <option value="Discover Rwanda">Discover Rwanda</option>
                <!-- Add more agencies as needed -->
            </select>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="origin" class="block text-sm font-medium text-gray-600">Origin:</label>
                <input type="text" id="origin" name="origin" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="destination" class="block text-sm font-medium text-gray-600">Destination:</label>
                <input type="text" id="destination" name="destination" class="mt-1 p-2 border rounded-md w-full">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Price:</label>
                <input type="text" id="price" name="price" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="departure_time" class="block text-sm font-medium text-gray-600">Departure Time:</label>
                <input type="datetime-local" id="departure_time" name="departure_time" class="mt-1 p-2 border rounded-md w-full">
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Route</button>
    </form>

      <div class="">
        <h2 class="text-xl font-semibold mb-4">Generated Routes</h2>
 

        <ul
            class="
                grid
                grid-cols-1
                sm:grid-cols-2
                md:grid-cols-3
                gap-4
            "
        >
            @foreach ($generatedRoutes as $route)
               <li class="mb-4 border-b pb-2 bg-white  p-4  border-gray-200 rounded-md shadow-md
               ">
                    <p class="text-lg font-semibold">{{ $route['agency'] }}</p>
                    <p class="text-gray-600">
                        From {{ $route['origin'] }} to {{ $route['destination'] }}<br>
                        Departure Time: {{ $route['departure_time'] }}<br>
                        Price: {{ $route['price'] }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Display Generated Routes -->
    </div>
  

</div>

@endsection
