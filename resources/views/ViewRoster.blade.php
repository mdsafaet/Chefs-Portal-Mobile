<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Roster</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      crossorigin="anonymous"
    />
  </head>
   <body class="bg-gray-50">
    <!-- TOP NAVBAR -->
    <nav class="bg-white shadow-md p-6 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
      <!-- Logo -->
      <div class=" md:w-1/4 m-3 p-3">
        <img
          src="https://chef.ordersplus.com.au/img/logo_icons/orderplus_chef_logo.png"
          alt="Logo"
          class="h-20 w-auto mx-auto rounded-2xl shadow-inner md:mx-0"
        />
      </div>

      <!-- Restaurant Title -->
      <div class="md:w-2/4">
        <h1 class="text-xl text-center font-semibold text-gray-800">MEXING POT RESTAURANT</h1>
      </div>

      <!-- User Info -->
      <div class="md:w-1/4 flex items-center justify-center md:justify-end gap-4 m-3">
        <img
          src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/afrbbciydcc8tgpxgxob"
          alt="User"
          class="w-14 h-14 rounded-full object-cover"
        />
        <div class="text-sm text-left">
          <div class="font-semibold text-gray-800">Adam Go</div>
          <div class="text-gray-500 text-xs">Head Chef</div>
          <button class="text-orange-500 text-xs mt-1 hover:underline">Log Out</button>
        </div>
      </div>
    </nav>

    <!-- SECOND NAVBAR: Tabs and Icons -->
    <div class="bg-white shadow-sm border-t border-gray-200 mt-6">
      <div class="flex flex-col lg:flex-row items-center justify-between px-6 py-3 gap-4">
        <!-- Tab -->
        <div>
          <button class="px-10 py-1 border rounded text-orange-500 border-orange-300 font-semibold text-sm shadow-sm">
            Statistics
          </button>
        </div>

        <!-- Icons -->
        <div class="flex gap-4 flex-wrap justify-center lg:justify-end text-xl">
          <button class="p-2 hover:bg-orange-100 rounded-full text-orange-500" title="Delivery">
          <img
          src="https://chef.ordersplus.com.au/img/express-delivery.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
          <button class="p-2 hover:bg-orange-100 rounded-full text-blue-600" title="Calendar">
          <img
          src="https://chef.ordersplus.com.au/img/logo_icons/roster_icon.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
          <button class="p-2 hover:bg-orange-100 rounded-full text-green-600" title="Meal">
          <img
          src="https://chef.ordersplus.com.au/img/logo_icons/online_ordering.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
          <button class="p-2 hover:bg-orange-100 rounded-full text-yellow-600" title="Ingredients">
          <img
          src="https://chef.ordersplus.com.au/img/logo_icons/pantry.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
          <button class="p-2 hover:bg-orange-100 rounded-full text-purple-600" title="Tasks">
          <img
          src="https://chef.ordersplus.com.au/img/logo_icons/prep-list.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
          <button class="p-2 hover:bg-orange-100 rounded-full text-pink-600" title="Cart">
          <img
          src="https://chef.ordersplus.com.au/img/logo_icons/cart_icon.png"
          alt="Logo"
          class="h-8 w-8"
          />
          </button>
        </div>
      </div>
    </div>

    <!-- BUTTON GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-6 px-6 py-10 max-w-6xl mx-auto">
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
         Roster Settings
      </button>
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
        View Roster
      </button>
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
         Suppliers
      </button>
    </div>


<!-- Calendar + Controls -->
<section class="flex flex-col md:flex-row items-center justify-between gap-4 p-4">
  <div class="w-full md:w-auto flex justify-center md:justify-start">
    <button class="text-orange-500 border border-orange-500 px-4 py-2 rounded-md text-sm font-medium hover:bg-orange-50 w-full md:w-auto">
      Enroll Staff
    </button>
  </div>

  <div class="flex-1 flex flex-col items-center gap-2">
    <!-- Calendar days hidden on small screens -->
    <div class="hidden sm:flex items-center justify-center gap-2 flex-wrap">
      <button class="w-7 h-7 flex items-center justify-center bg-gray-100 rounded-full text-gray-700">&#8249;</button>
      <div class="flex flex-wrap justify-center gap-2 text-sm font-medium text-gray-700">
        <div class="text-center w-12"><p>20</p><p>Tue</p></div>
        <div class="text-center w-12"><p>21</p><p>Wed</p></div>
        <div class="text-center w-12"><p>22</p><p>Thu</p></div>
        <div class="text-center w-12"><p>23</p><p>Fri</p></div>
        <div class="text-center w-12"><p>24</p><p>Sat</p></div>
        <div class="text-center w-12"><p>25</p><p>Sun</p></div>
      </div>
      <button class="w-7 h-7 flex items-center justify-center bg-gray-100 rounded-full text-gray-700">&#8250;</button>
    </div>

    <!-- Month always visible -->
    <div class="text-orange-500 font-semibold text-sm">May</div>
  </div>

  <div class="w-full md:w-auto flex flex-wrap justify-center md:justify-end gap-2">
    <button class="bg-blue-100 text-blue-800 px-4 py-2 text-sm rounded cursor-not-allowed opacity-50 w-full md:w-auto">
      Save as Template
    </button>
    <button class="border border-green-500 text-green-600 px-4 py-2 text-sm rounded hover:bg-green-50 w-full md:w-auto">
      Publish
    </button>
  </div>
</section>



    <!-- Search -->
    <div class="px-4 flex justify-between pb-4">
      <div class="relative ">
        <input type="text" placeholder="Search" class="pl-8 pr-4 py-2 border rounded shadow-sm w-full max-w-md mx-auto text-sm" />
        <span class="absolute left-3 top-2 text-gray-400">🔍</span>
      </div>
      <div>
        <button class="border border-green-500 text-green-600 px-4 py-2 text-sm rounded hover:bg-green-50">
        Weekly Total
        </button>
    </div>

    </div>
    

<section class="p-4 bg-white rounded shadow space-y-4">
  <!-- Grid layout for multiple employees -->
  <div class="grid grid-cols-1 sm:grid-cols-5 lg:grid-cols-2 xl:grid-cols-3 gap-4">

    <!-- Employee Card -->
    <div class="bg-gray-50 p-3 rounded shadow flex flex-col justify-between gap-4">
      <div class="flex justify-between">
        <div class="flex items-center gap-3">
          <img src="https://i.pravatar.cc/40?img=1" class="rounded-full w-10 h-10" />
          <div>
            <p class="text-sm font-semibold">Alex Hales</p>
            <p class="text-xs text-green-600">Chef</p>
          </div>
        </div>
        <button class="text-gray-400 hover:text-red-500 sm:ml-auto">🗑️</button>
      </div>

      <div class="flex flex-wrap gap-2">
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded">+ Add Shift</div>
        <div class="bg-[#00AEEF] text-white text-xs p-2 rounded text-center">15:00 - 22:00<br>Bar</div>
        <div class="bg-[#FF7F32] text-white text-xs p-2 rounded text-center">01:04 - 16:30<br>Bar</div>
        <div class="bg-[#00AEEF] text-white text-xs p-2 rounded text-center">15:00 - 22:00<br>Kitchen</div>
        <div class="bg-[#A259FF] text-white text-xs p-2 rounded text-center hidden md:block">06:00 - 12:00<br>Pizza</div>
        <div class="bg-[#F44336] text-white text-xs p-2 rounded text-center hidden md:block">14:54 - 18:30<br>Pizza</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded hidden sm:block">+ Add Shift</div>
        <div class="bg-[#00AEEF] text-white text-xs p-2 rounded text-center">15:00 - 22:00<br>Kitchen</div>
        <div class="bg-[#00AEEF] text-white text-xs p-2 rounded text-center">15:00 - 22:00<br>Test</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded hidden ">+ Add Shift</div>
        
       
      </div>

      <div class="flex items-center gap-1 bg-orange-50 text-orange-600 text-sm font-medium rounded px-3 py-2 w-fit">
        <i class="fas fa-clock"></i> 45.0 Hrs
      </div>
    </div>

    <!-- Second Employee Card -->
    <div class="bg-gray-50 p-3 rounded shadow flex flex-col justify-between gap-4">
      <div class="flex justify-between">
        <div class="flex items-center gap-3">
          <img src="https://i.pravatar.cc/40?img=2" class="rounded-full w-10 h-10" />
          <div>
            <p class="text-sm font-semibold">Natasha Mills</p>
            <p class="text-xs text-green-600">Pastry Chef</p>
          </div>
        </div>
        <button class="text-gray-400 hover:text-red-500 sm:ml-auto">🗑️</button>
      </div>

      <div class="flex flex-wrap gap-2">
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded">+ Add Shift</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded">+ Add Shift</div>
        <div class="bg-[#00AEEF] text-white text-xs p-2 rounded text-center">15:00 - 22:00<br>Grill</div>
        <div class="bg-[#00C853] text-white text-xs p-2 rounded text-center">06:00 - 12:00<br>Pan</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded hidden sm:block">+ Add Shift</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded hidden sm:block">+ Add Shift</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded hidden md:block">+ Add Shift</div>
      </div>

      <div class="flex items-center gap-1 bg-orange-50 text-orange-600 text-sm font-medium rounded px-3 py-2 w-fit">
        <i class="fas fa-clock"></i> 13.0 Hrs
      </div>
    </div>

    <!-- Third Employee Card -->
    <div class="bg-gray-50 p-3 rounded shadow flex flex-col justify-between gap-4">
      <div class="flex justify-between">
        <div class="flex items-center gap-3">
          <img src="https://i.pravatar.cc/40?img=3" class="rounded-full w-10 h-10" />
          <div>
            <p class="text-sm font-semibold">John Doe</p>
            <p class="text-xs text-green-600">Waiter</p>
          </div>
        </div>
        <button class="text-gray-400 hover:text-red-500 sm:ml-auto">🗑️</button>
      </div>

      <div class="flex flex-wrap gap-2">
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded">+ Add Shift</div>
        <div class="bg-[#FFA500] text-white text-xs p-2 rounded text-center">11:00 - 15:00<br>Floor</div>
        <div class="bg-[#9C27B0] text-white text-xs p-2 rounded text-center">17:00 - 21:00<br>Service</div>
      </div>

      <div class="flex items-center gap-1 bg-orange-50 text-orange-600 text-sm font-medium rounded px-3 py-2 w-fit">
        <i class="fas fa-clock"></i> 8.0 Hrs
      </div>
    </div>

    <!-- Fourth Employee Card -->
    <div class="bg-gray-50 p-3 rounded shadow flex flex-col justify-between gap-4">
      <div class="flex justify-between ">
        <div class="flex items-center gap-3">
          <img src="https://i.pravatar.cc/40?img=4" class="rounded-full w-10 h-10" />
          <div>
            <p class="text-sm font-semibold">Emma Brown</p>
            <p class="text-xs text-green-600">Cleaner</p>
          </div>
        </div>
        <button class="text-gray-400 hover:text-red-500 sm:ml-auto">🗑️</button>
      </div>

      <div class="flex flex-wrap gap-2">
        <div class="bg-[#607D8B] text-white text-xs p-2 rounded text-center">09:00 - 12:00<br>Maintenance</div>
        <div class="border text-xs text-gray-400 text-center py-2 px-3 rounded">+ Add Shift</div>
      </div>

      <div class="flex items-center gap-1 bg-orange-50 text-orange-600 text-sm font-medium rounded px-3 py-2 w-fit">
        <i class="fas fa-clock"></i> 3.0 Hrs
      </div>
    </div>

  </div>
</section>


        

  </body>
</html>
