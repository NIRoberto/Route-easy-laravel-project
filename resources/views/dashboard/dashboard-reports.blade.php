

@extends('layout.dashboard')

@section('content')

<div class="flex flex-col p-8">

    <div class="mb-4">
        <h1 class="text-2xl my-8 font-bold">Booking Report</h1>
        <a href="" class="bg-gray-500 text-white px-4 py-2 rounded-md">View Routes</a>
    </div>

    <!-- Display Booking Report -->
    <div>
        <h2 class="text-xl font-semibold mb-4">Booked Tickets Report</h2>

        @php
            // Manually declare an array of booked tickets for testing
            $bookedTickets = [
                [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],
                       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],       [
                    'agency' => 'Amazing Travels',
                    'user' => ['name' => 'John Doe', 'email' => 'john@example.com'],
                    'route' => ['origin' => 'Kigali', 'destination' => 'Gisenyi'],
                    'seat' => 'A1',
                    'time' => '2024-01-24 08:00:00',
                    'price' => '50,000 RWF',
                ],
                // Add more booked tickets as needed
            ];
        @endphp

        <table class="min-w-full bg-white p-8 border border-gray-300">
            <thead 
                class="
                    font-semibold
                    tracking-wide
                    text-left
                    uppercase
                    border-b
                    bg-white
                    p-4
                "
            >
                <tr
                    class="
                        text-gray-600 m-4
                    "
                >
                    <th class="border-b">Travel Agency</th>
                    <th class="border-b">Passenger Name</th>
                    <th class="border-b">Passenger Email</th>
                    <th class="border-b">Route</th>
                    <th class="border-b">Seat</th>
                    <th class="border-b">Departure Time</th>
                    <th class="border-b">Price</th>
                </tr>
            </thead>
            <tbody
                class="
                    text-sm
                    text-gray-600
                "
            >
                @foreach ($bookedTickets as $ticket)
                    <tr class="border-b
                        @if ($loop->even)
                            bg-gray-100
                        @endif
                    ">
                        <td class="py-2">{{ $ticket['agency'] }}</td>
                        <td class="py-2">{{ $ticket['user']['name'] }}</td>
                        <td class="py-2">{{ $ticket['user']['email'] }}</td>
                        <td class="py-2">{{ $ticket['route']['origin'] }} to {{ $ticket['route']['destination'] }}</td>
                        <td class="py-2">{{ $ticket['seat'] }}</td>
                        <td class="py-2">{{ $ticket['time'] }}</td>
                        <td class="py-2">{{ $ticket['price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
