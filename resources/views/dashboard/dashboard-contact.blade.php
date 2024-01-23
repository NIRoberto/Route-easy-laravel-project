

@extends('layout.dashboard')


       @php
            $travelAgencies = [
                [
                    'name' => 'Amazing Travels',
                    'email' => 'info@amazingtravels.com',
                    'phone' => '+123 456 7890',
                    'address' => '123 Main Street, Cityville',
                ],

                     [
                    'name' => 'Amazing Travels',
                    'email' => 'info@amazingtravels.com',
                    'phone' => '+123 456 7890',
                    'address' => '123 Main Street, Cityville',
                ],     [
                    'name' => 'Amazing Travels',
                    'email' => 'info@amazingtravels.com',
                    'phone' => '+123 456 7890',
                    'address' => '123 Main Street, Cityville',
                ],     [
                    'name' => 'Amazing Travels',
                    'email' => 'info@amazingtravels.com',
                    'phone' => '+123 456 7890',
                    'address' => '123 Main Street, Cityville',
                ],     [
                    'name' => 'Amazing Travels',
                    'email' => 'info@amazingtravels.com',
                    'phone' => '+123 456 7890',
                    'address' => '123 Main Street, Cityville',
                ],
            
            ];
        @endphp

@section('content')

<div
  class="flex flex-col p-8"
>

    <div class="mb-4">
        <h1 class="text-2xl
        my-8
        ">Contact Information</h1>
        <a href="" class="bg-gray-500 text-white px-4 py-2 rounded-md
            my-8
        ">View Routes</a>
    </div>
    <div>
        <h2 class="text-xl font-semibold mb-4">Travel Agencies Contact Information</h2>
        <ul class="list-disc pl-4  
        grid
        grid-cols-1
        sm:grid-cols-2
        md:grid-cols-3
        gap-4
        list-type-none

        ">
            @foreach ($travelAgencies as $agency)
                <li class="mb-4">
                    <p class="text-lg font-semibold">{{ $agency['name'] }}</p>
                    <p>Email: {{ $agency['email'] }}</p>
                    <p>Phone: {{ $agency['phone'] }}</p>
                    <p>Address: {{ $agency['address'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>

</div>

@endsection
