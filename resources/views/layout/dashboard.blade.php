<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
    <title>Dashboard</title>
</head>
<body class="font-sans bg-gray-100 flex overflow-hidden">
        <div
      class= "py-10 h-screen  flex flex-col border border-r-1 bg-white relative w-16 md:w-64"
    >
      <div
        class="cursor-pointer bg-red-900 text-white absolute -right-3 top-10 rounded-full w-6 h-6 bg-[#FF8C8C] flex justify-center items-center"
      >
          <i class="fa-solid fa-angle-left"></i>
      </div>
      <a href="/">
        <div class="logo-div   flex space-x-4 items-center">
          <img src="https://media.istockphoto.com/id/1446660540/de/vektor/bus-logo-design-vektor-reisebus-logo.jpg?s=1024x1024&w=is&k=20&c=9lLaMTLHrakxcmxI3FE2XHZnw7LYSL2Uvz5FA-vu3kQ=" class="w-16" />
          <span class="font-bold">Agency admin</span>
        </div>
      </a>
 
        <x-sidebar :links="[
        ['text' => 'dashboard', 'icon' => 'fas fa-home'],
    ['text' => 'users', 'icon' => 'fas fa-users'],
    ['text' => 'tickets', 'icon' => 'fas fa-ticket-alt'],
    ['text' => 'routes', 'icon' => 'fas fa-route'],
    ['text' => 'reports', 'icon' => 'fas fa-chart-line'],
    ['text' => 'contact', 'icon' => 'fas fa-envelope'],
    ['text' => 'settings', 'icon' => 'fas fa-cog'],
    ['text' => 'logout', 'icon' => 'fas fa-sign-out-alt'],
]" />
      </div>
    </div> 
        <main class="flex w-full border max-h-screen overflow-y-auto bg-gray-100
        ">
        @yield('content')
        </main>
</body>
</html>
