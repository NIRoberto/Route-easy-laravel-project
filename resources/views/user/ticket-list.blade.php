
@extends('layout.user')

@section('content')
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

<body class="font-sans bg-gray-100 ">

    <!-- Ticket List Section -->
    <div class="container mx-auto ">
        <h2 class="text-4xl font-semibold m-8">Ticket List</h2>

        <!-- Ticket Cards -->
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4  m-8">

     
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

</body>

@endsection