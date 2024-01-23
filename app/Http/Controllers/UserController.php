<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

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
        
        return view('users.index', compact('users'));
    }
}