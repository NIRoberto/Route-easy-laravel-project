<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("user.home",[
        'title' => 'Home'
    ]);
});


Route::get('/login', function () {
    return view("auth.login",[
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view("auth.register",[
        'title' => 'Login'
    ]);
});


// Route::get('/agency', function () {
//     return view("agency.agency-home",[
//         'title' => 'Agency'
//     ]);
// });

Route::get("/travel",function(){
    return view('user.travel',[
        'title' => 'Travel'
    ]);
});

Route::get("/travel-detail",function(){
    return view('travel.travel-detail',[
        'title' => 'Travel Detail'
    ]);
});

Route::get("/ticket",function(){
    return view('user.ticket-list',[
        'title' => 'Checkout'
    ]);
});

Route::get("/contact",function(){
    return view('user.contact',[
        'title' => 'Contact'
    ]);
});
Route::get("/dashboard/dashboard",function(){
    return view('dashboard.dashboard-home',[
        'title' => 'Dashboard'
    ]);
});
Route::get("/dashboard/users",function(){
    return view('dashboard.dashboard-users',[
        'title' => 'Dashboard'
    ]);
});
Route::get("/dashboard/routes",function(){
    return view('dashboard.dashboard-routes',[
        'title' => 'Routes'
    ]);
});
Route::get("/dashboard/directions",function(){
    return view('dashboard.dashboard-direction',[
        'title' => 'Directions'
    ]);
});
Route::get("/dashboard/reports",function(){
    return view('dashboard.dashboard-reports',[
        'title' => 'Report'
    ]);
});
Route::get("/dashboard/tickets",function(){
    return view('dashboard.dashboard-tickets',[
        'title' => 'Tickets'
    ]);
});
Route::get("/dashboard/contact",function(){
    return view('dashboard.dashboard-contact',[
        'title' => 'Contact'
    ]);
});







Route::get('/dashboard/Tickets/current', [TicketController::class, 'current'])->name('tickets.current');
Route::get('/dashboard/Tickets/previous', [TicketController::class, 'previous'])->name('tickets.previous');