
@extends('layout.user')

@section('content')


   <!-- Hello Screen -->
    <div class="container  mx-auto flex items-center justify-center p-16">

        <!-- Left Section - Search Form -->
        <div class="w-full md:w-1/2 pr-8">
            <h1 class="text-4xl font-bold mb-6">Hello, Welcome to My Bus Service!</h1>

            <!-- Search Form -->
             <form class="flex flex-col space-y-4">
                <input type="text" placeholder="From" class="border p-2">
                <input type="text" placeholder="To" class="border p-2">
                <input type="date" placeholder="Date" class="border p-2">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
            </form>
        </div>
        <div class="hidden md:block w-1/2">
            <img src="https://media.istockphoto.com/id/1134018636/photo/handsome-smiling-young-man-getting-into-bus.jpg?s=612x612&w=0&k=20&c=sViHTT89eDEc0aU7h-1sV7qT8RqT7XlqtgFFBoFpo4k=" alt="Bus Image" class="w-full h-full object-cover rounded-lg">
        </div>

    </div>

       @php
            $availableTickets = [
                [
                    'travel_agency' => [
                        'name' => 'Ritco express',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => '32',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Gisenyi', 'price' => '5000 RWF'],
                    'time' => '2024-01-24 08:00:00',
                ],
                [
                    'travel_agency' => [
                        'name' => 'Horizon express ',
                        'image' => 'https://safaribay.net/wp-content/uploads/2018/09/Horizon-Express-Bus-Rwanda.jpg', // Placeholder image URL
                    ],
                    'seat' => '32',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '4000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],
                     [
                    'travel_agency' => [
                        'name' => 'Ritco express',
                        'image' => 'https://www.jobinrwanda.com/sites/default/files/styles/medium/public/employer_logos/xlogo_2130242003.png,qitok=a11ZtBb6.pagespeed.ic.wCryn_YzzN.jpg', // Placeholder image URL
                    ],
                    'seat' => '32',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '4000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],     [
                    'travel_agency' => [
                        'name' => 'Volcano express',
                        'image' => 'https://safaribay.net/wp-content/uploads/2018/09/volcano-express.jpg', // Placeholder image URL
                    ],
                    'seat' => '32',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '4000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],     [
                    'travel_agency' => [
                        'name' => 'Ritco express',
                        'image' => 'https://safaribay.net/wp-content/uploads/2018/09/Horizon-Express-Bus-Rwanda.jpg', // Placeholder image URL
                    ],
                    'seat' => '32',
                    'direction' => ['origin' => 'Kigali', 'destination' => 'Musanze', 'price' => '4000 RWF'],
                    'time' => '2024-01-25 10:30:00',
                ],
            ];
        @endphp

<div 
  class="
    m-8  flex flex-col gap-8
  "
>  
<h1
 class="
                    text-3xl
                "   
            >
                Available Tickets
            </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">

     
            @foreach ($availableTickets as $ticket)
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
                    <a href="/ticket">
                        <button class="bg-orange-600 text-white px-4 py-2 rounded-md">Book Now</button>
                    </a>
                </div>
            @endforeach
        </div>
</div>



@endsection