

@extends('layout.dashboard')

@section('content')

    @php
        // Manually declare an array of ten users for testing
        $users = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'admin'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com', 'role' => 'customer'],
            ['id' => 3, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'role' => 'travel_agency'],
            ['id' => 4, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'role' => 'customer'],
            ['id' => 5, 'name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'role' => 'admin'],
            ['id' => 6, 'name' => 'Eva Williams', 'email' => 'eva@example.com', 'role' => 'travel_agency'],
            ['id' => 7, 'name' => 'David Clark', 'email' => 'david@example.com', 'role' => 'customer'],
            ['id' => 8, 'name' => 'Grace Lee', 'email' => 'grace@example.com', 'role' => 'admin'],
            ['id' => 9, 'name' => 'Frank Miller', 'email' => 'frank@example.com', 'role' => 'travel_agency'],
            ['id' => 10, 'name' => 'Helen Turner', 'email' => 'helen@example.com', 'role' => 'customer'],
        ];
    @endphp

<div class="w-full border p-8">

    <h2 class="text-2xl font-bold mb-4">Filter Users</h2>

    <form  class="mb-4">
        @csrf
        <label for="role" class="block text-sm font-medium text-gray-700">Select Role:</label>
        <select id="role" name="role" class="mt-1 p-2 border rounded-md w-full">
            <option value="all">All</option>
            <option value="customer">Customer</option>
            <option value="travel_agency">Travel Agency</option>
            <option value="administrator">Administrator</option>
        </select>
        <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded-md">Filter</button>
    </form>

    <h2 class="text-2xl font-bold mb-4">Users</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @php
            $selectedRole = request('role', 'all');
        @endphp
        @foreach ($users as $user)
            @if ($selectedRole == 'all' || $user['role'] == $selectedRole)
                <div class="bg-white shadow-md rounded-md p-4">
                    <h5 class="text-xl font-semibold mb-2">{{ $user['name'] }}</h5>
                    <p class="text-gray-600 mb-2">{{ $user['email'] }}</p>
                    <p class="text-gray-500">Role: {{ ucfirst($user['role']) }}</p>
                    
                    <!-- Custom content based on selected role -->
                    
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>




@endsection