

@extends('layout.user')

@section('content')
       @php
            $availableTickets = [
                [
                    'travel_agency' => [
                        'name' => 'Amazing Travels',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => 'A1',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Gisenyi', 'price' => '50,000 RWF'],
                    'time' => '2024-01-24 08:00:00',
                ],
                [
                    'travel_agency' => [
                        'name' => 'Serene Tours',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => 'B3',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '40,000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],
                     [
                    'travel_agency' => [
                        'name' => 'Serene Tours',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => 'B3',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '40,000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],     [
                    'travel_agency' => [
                        'name' => 'Serene Tours',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => 'B3',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '40,000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],     [
                    'travel_agency' => [
                        'name' => 'Serene Tours',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => 'B3',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '40,000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],
            ];
        @endphp


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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-8">     
            @foreach ($availableTickets as $ticket)
                <div class="bg-white shadow-md rounded-md p-4">
                    <div class="mb-4">
                        <img src="{{ $ticket['travel_agency']['image'] }}" alt="{{ $ticket['travel_agency']['name'] }}" class="rounded-full h-16 w-16 mx-auto mb-2">
                        <h2 class="text-xl font-semibold text-center">{{ $ticket['travel_agency']['name'] }}</h2>
                    </div>

                    <p class="text- mb-2">Seat: {{ $ticket['seat'] }}</p>

                    <div class="mb-2">
                        <span class="font-semibold">Direction:</span>
                        <span>{{ $ticket['direction']['origin'] }} to {{ $ticket['direction']['destination'] }}</span>
                    </div>

                    <div class="mb-2">
                        <span class="font-semibold">Price:</span>
                        <span>{{ $ticket['direction']['price'] }}</span>
                    </div>

                    <div class="mb-2">
                        <span class="font-semibold">Time:</span>
                        <span>{{ $ticket['time'] }}</span>
                    </div>

                    <button class="bg-orange-600 hover:bg-orange-900 text-white px-4 py-2 rounded-md">Book Now</button>
                </div>
            @endforeach
        </div>

</div>

@endsection
