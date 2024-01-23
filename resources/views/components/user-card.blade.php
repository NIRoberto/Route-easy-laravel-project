
<div class="bg-white shadow-md rounded-md p-4">
    <h5 class="text-xl font-semibold mb-2">{{ $user['name'] }}</h5>
    <p class="text-gray-600 mb-2">{{ $user['email'] }}</p>
    <p class="text-gray-500">Role: {{ ucfirst($user['role']) }}</p>

    <div class="mt-4 flex space-x-2">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit</button>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
    </div>
</div>
