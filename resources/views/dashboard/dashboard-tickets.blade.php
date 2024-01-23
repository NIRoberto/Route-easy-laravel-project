
@extends('layout.dashboard')
@section('content')
    @php
        // Manually declare an array of 15 sample tickets for testing
        $tickets = [
            [
                'travel_agency' => [
                    'name' => 'Rwanda Explorers',
                    'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                ],
                'seat' => 'A1',
                'direction' => ['origin' => 'Kigali', 'destination' => 'Gisenyi', 'price' => '50,000 RWF'],
                'time' => '2024-01-24 08:00:00',
                'is_booked' => true,
                'user' => ['name' => 'Alice Uwimana', 'email' => 'alice@example.com'],
            ],
            [
                'travel_agency' => [
                    'name' => 'Serene Tours',
                    'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                ],
                'seat' => 'B3',
                'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '40,000 RWF'],
                'time' => '2024-01-25 10:30:00',
                'is_booked' => false,
            ],
            [
                'travel_agency' => [
                    'name' => 'Discover Rwanda',
                    'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                ],
                'seat' => 'C2',
                'direction' => ['origin' => 'Kigali', 'destination' => 'Nyamata', 'price' => '35,000 RWF'],
                'time' => '2024-01-26 12:45:00',
                'is_booked' => false,
            ],
            // Add more sample tickets as needed
        ];
    @endphp


<div class="flex flex-col p-8 gap-4 mb-20">

  <h1
      class="
          text-3xl
      "
  >

        Tickets
  </h1>
    <div class="mb-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex flex-col gap-4">
            <label for="filter-agency" class="mr-2">Filter by Agency:</label>
            <select id="filter-agency" class="border rounded-md p-1">
                <option value="all">All Agencies</option>
                <option value="Rwanda Explorers">Rwanda Explorers</option>
                <option value="Serene Tours">Serene Tours</option>
                <option value="Discover Rwanda">Discover Rwanda</option>
                <!-- Add more agencies as needed -->
            </select>
        </div>
        <div class="flex flex-col gap-4">
            <label for="filter-status" class="mr-2">Filter by Status:</label>
            <select id="filter-status" class="border rounded-md p-1">
                <option value="all">All</option>
                <option value="available">Available</option>
                <option value="booked">Booked</option>
            </select>
        </div>
        <div class="flex flex-col gap-4">
            <label for="filter-time" class="mr-2">Filter by Time:</label>
            <input type="datetime-local" id="filter-time" class="border rounded-md p-1">
        </div>
    </div>

    <!-- Ticket Display -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($tickets as $ticket)
            <div class="bg-white shadow-md rounded-md p-4">
                <div class="mb-4">
                    <img src="{{ $ticket['travel_agency']['image'] }}" alt="{{ $ticket['travel_agency']['name'] }}" class="rounded-full h-16 w-16 mx-auto mb-2">
                    <h2 class="text-xl font-semibold text-center">{{ $ticket['travel_agency']['name'] }}</h2>
                </div>

                <p class="text-gray-600 mb-2">Seat: {{ $ticket['seat'] }}</p>

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

                @if ($ticket['is_booked'])
                    <div class="mb-2">
                        <span class="font-semibold">Booked by:</span>
                        <span>{{ $ticket['user']['name'] }} ({{ $ticket['user']['email'] }})</span>
                    </div>
                @else
                    <div class="mb-2 text-green-500 font-semibold">Available</div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Book Now</button>
                @endif
            </div>
        @endforeach
    </div>

</div>

@endsection
