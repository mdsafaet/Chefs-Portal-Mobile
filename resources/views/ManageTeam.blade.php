<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />
  </head>

  <body class="bg-gray-50">
    <!-- TOP NAVBAR -->
    <nav class="bg-white shadow-md p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
      <div class="md:w-1/4">
        <img src="https://chef.ordersplus.com.au/img/logo_icons/orderplus_chef_logo.png" alt="Logo" class="h-16 md:h-20 w-auto mx-auto md:mx-0 rounded-2xl shadow-inner" />
      </div>
      <div class="md:w-2/4">
        <h1 class="text-lg md:text-xl font-semibold text-gray-800 text-center">MEXING POT RESTAURANT</h1>
      </div>
      <div class="md:w-1/4 flex items-center justify-center md:justify-end gap-3">
        <img src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/afrbbciydcc8tgpxgxob" alt="User" class="w-12 h-12 md:w-14 md:h-14 rounded-full object-cover" />
        <div class="text-sm text-left">
          <div class="font-semibold text-gray-800">Adam Go</div>
          <div class="text-gray-500 text-xs">Head Chef</div>
          <button class="text-orange-500 text-xs mt-1 hover:underline">Log Out</button>
        </div>
      </div>
    </nav>

    <!-- SECOND NAVBAR -->
    <div class="bg-white shadow-sm border-t border-gray-200 mt-4 relative">
      <div class="flex flex-col sm:flex-row items-center justify-between px-4 py-2 relative gap-2">
        <div class="z-10">
          <button class="rounded-full border border-gray-300 p-2 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
        </div>
        <div class="flex-1 text-center">
          <h2 class="text-lg font-semibold text-gray-800">Admin</h2>
        </div>
        <div class="flex flex-wrap justify-center sm:justify-end gap-2 z-10">
          <button class="p-2 rounded-full hover:bg-orange-100" title="Delivery">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/express-delivery.png" alt="Delivery" />
          </button>
          <button class="p-2 rounded-full hover:bg-orange-100" title="Calendar">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/roster_icon.png" alt="Calendar" />
          </button>
          <button class="p-2 rounded-full hover:bg-orange-100" title="Online Ordering">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/online_ordering.png" alt="Meal" />
          </button>
          <button class="p-2 rounded-full hover:bg-orange-100" title="Pantry">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/pantry.png" alt="Pantry" />
          </button>
          <button class="p-2 rounded-full hover:bg-orange-100" title="Prep List">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/prep-list.png" alt="Prep List" />
          </button>
          <button class="p-2 rounded-full hover:bg-orange-100" title="Cart">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/cart_icon.png" alt="Cart" />
          </button>
        </div>
      </div>
    </div>

    <!-- BUTTON GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-4 py-6 max-w-5xl mx-auto">
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow hover:bg-orange-600 text-lg font-semibold transition duration-300">Manage Team</button>
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow hover:bg-orange-600 text-lg font-semibold transition duration-300">Manage Roster</button>
    </div>

    <!-- New Staff Button -->
    <div class="mb-4 px-4">
      <button class="bg-orange-500 text-white px-4 py-2 rounded flex items-center gap-2 hover:bg-orange-600">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/></svg>
        New Staff
      </button>
    </div>

<!-- Responsive Card Layout for All Screens -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-4 py-6">
  <!-- Card 1 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Alex Hales" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Alex Hales</h3>
        <p class="text-gray-500">Chef</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0404670200</p>
    <p><span class="font-semibold">Emergency:</span> Jamal [0412369258]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Gabriel Greenwood" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Gabriel Greenwood</h3>
        <p class="text-gray-500">Chef</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0404670200</p>
    <p><span class="font-semibold">Emergency:</span> Damen [0404670201]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Adam Go" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Adam Go</h3>
        <p class="text-gray-500">Head Chef</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0414125698</p>
    <p><span class="font-semibold">Emergency:</span> Alice [0414024567]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Alexa Huson" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Alexa Huson</h3>
        <p class="text-gray-500">Chef de Partie</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0414321654</p>
    <p><span class="font-semibold">Emergency:</span> Hunter [0456321456]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Nathan Cole" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Nathan Cole</h3>
        <p class="text-gray-500">Sous Chef</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0423456789</p>
    <p><span class="font-semibold">Emergency:</span> Brian [0423456780]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Card 6 -->
  <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition duration-300 text-sm text-gray-700 flex flex-col gap-2">
    <div class="flex items-center gap-4">
      <img src="https://randomuser.me/api/portraits/women/6.jpg" alt="Samantha Grey" class="w-12 h-12 rounded-full object-cover">
      <div>
        <h3 class="font-semibold text-base text-gray-900">Samantha Grey</h3>
        <p class="text-gray-500">Pastry Chef</p>
      </div>
    </div>
    <p><span class="font-semibold">Contact:</span> 0432123456</p>
    <p><span class="font-semibold">Emergency:</span> Tina [0432123457]</p>
    <div class="mt-2">
      <a href="#" class="text-orange-500 hover:underline text-xs inline-flex items-center">
        View Personal Info
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6m2-2h6m0 0v6m0-6L10 14" />
        </svg>
      </a>
    </div>
  </div>
</div>

</div>
 </div>
  </body>
</html>
