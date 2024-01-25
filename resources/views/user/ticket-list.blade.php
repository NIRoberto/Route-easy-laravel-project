
       @php
            // Manually declare an array of available tickets for testing
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
@extends('layout.user')

@section('content')


<body class="font-sans bg-gray-100">
    <div class="flex">
        <div class="w-2/3 m-4 p-6 bg-w rounded-md">
            <h2 class="text-4xl font-semibold mb-8">Ticket List</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                        <button class="bg-orange-600 hover:bg-orange-800 text-white px-4 py-2 rounded-md">Book Now</button>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="w-1/3 m-4 p-6 bg-white rounded-md shadow-md">
            <h2 class="text-2xl font-bold mb-4">Bus Ticket Booking</h2>

            <form action="/book-ticket" method="post">
                @csrf

                <!-- Passenger Details -->
                <div class="mb-4">
                    <label for="passengerName" class="block text-sm font-semibold text-gray-600">Passenger Name:</label>
                    <input type="text" id="passengerName" name="passengerName" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="contactNumber" class="block text-sm font-semibold text-gray-600">Contact Number:</label>
                    <input type="text" id="contactNumber" name="contactNumber" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- Journey Details -->
                <div class="mb-4">
                    <label for="departureCity" class="block text-sm font-semibold text-gray-600">Departure City:</label>
                    <input type="text" id="departureCity" name="departureCity" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="destinationCity" class="block text-sm font-semibold text-gray-600">Destination City:</label>
                    <input type="text" id="destinationCity" name="destinationCity" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- Date and Time -->
                <div class="mb-4">
                    <label for="departureDate" class="block text-sm font-semibold text-gray-600">Departure Date:</label>
                    <input type="date" id="departureDate" name="departureDate" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="departureTime" class="block text-sm font-semibold text-gray-600">Departure Time:</label>
                    <input type="time" id="departureTime" name="departureTime" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-md">Book Ticket</button>
                </div>
            </form>
        </div>
    </div>
</body>


@endsection