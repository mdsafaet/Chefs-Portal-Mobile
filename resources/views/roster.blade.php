@extends('layouts.layout')

@section('content')
<body class="bg-gray-100 font-sans">

  <div class=" md:max-w-7xl max-w-xs mx-auto p-3 lg:p-0  lg:mt-0 mt-4">
    <div class="lg:bg-white ">
      <header class="flex  justify-between items-center flex-wrap ">
      <div class="flex flex-col">
        <h1 class="text-xl lg:ml-4 lg:mt-4  font-semibold">Mixing Pot Restaurant</h1>
        <div class="flex lg:ml-3 lg:space-x-4 mt-2">
          <div class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" title="View Delivery">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/express-delivery.png" alt="">
          </div>
          <a href="https://chef.ordersplus.com.au/admin/roster" class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" title="View Rosters">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/roster_icon.png" alt="">
          </a>
          <a href="https://chef.ordersplus.com.au/orders/home" class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" title="Current Orders">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/online_ordering.png" alt="">
          </a>
          <a href="https://chef.ordersplus.com.au/kitchen/pantry-list" class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" title="Pantry Lists">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/pantry.png" alt="">
          </a>
          <a href="https://chef.ordersplus.com.au/kitchen/prep-list" class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" title="Prep-List">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/prep-list.png" alt="">
          </a>
          <div class="cursor-pointer rounded-full hover:bg-orange-100 w-8 flex" data-modal-toggle="viewCartModal" title="Order in Cart">
            <img class="h-6 w-6" src="https://chef.ordersplus.com.au/img/logo_icons/cart_icon.png" alt="">
          </div>
        </div>
      </div>

      <!-- Profile section with a white card behind the profile image -->
      <div class="flex flex-col items-center mt-4 sm:mt-0">
        <div class="relative  mb-4">
          <img src="{{ asset('assets/onti/images/man.png') }}" alt="Profile" class=" lg:mr-3 w-12 h-12 shadow-xl/30">
          <div class="absolute inset-0 mt-10 flex justify-center items-center text-black font-bold text-sm">
            <p class="text-lg lg:mr-3 ">Adam</p>
          </div>
        </div>
      </div>
    </header>
    <div class="bg-orange-500 lg:bg-white  p-5 rounded-lg pb-10 shadow-lg relative">
        <p class="absolute inset-0 flex items-center justify-end  font-bold text-xl lg:mr-3   mb-68">Head Chef</p>
        <h2 class="text-2xl font-semibold mb-4 text-center text-orange-500">Manage Roster</h2>

        <!-- Roster Settings -->
        <div class="mb-4 lg:ml-90">
          <div class="flex justify-between items-center lg:w-130 lg:rounded-full rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white p-3 border-2 border-orange-600 ">
            <span class="text-lg ">Roster Settings</span>
            <button class="text-2xl rounded-full pl-2 pr-2  group-hover:bg-white group-hover:text-black border-2 rounded bg-red-500" onclick="toggleSection('rosterSettings')">+</button>
          </div>
          <div id="rosterSettings" class="hidden mt-2 ">
            <div class="mb-2  flex justify-between items-center lg:w-130 lg:rounded-full rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white p-3 border-2 border-orange-600">
            <span class="text-lg">View Roster</span>
            
          </div>
          <div class="flex justify-between items-center lg:w-130 lg:rounded-full rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white p-3 border-2 border-orange-600">
            <span class="text-lg">Staff Attendance</span>
           
          </div>
          </div>
        </div>

        <!-- Shift Settings -->
        <div class="mb-4 lg:ml-120">
          <div class="flex justify-between items-center lg:w-70 lg:rounded-full  rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white  lg:p-1 p-3 group border-2 border-orange-600">
            <span class="text-lg pl-2">Shift Settings</span>
            <button class="text-2xl rounded-full pl-2 pr-2  group-hover:text-white border-2 rounded bg-red-500" onclick="toggleSection('shiftSettings')">+</button>
          </div>
          <div id="shiftSettings" class="hidden mt-2">
              <div class="flex justify-between items-center lg:w-70 lg:rounded-full  rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white  lg:p-1 p-3 mb-2 group border-2 border-orange-600">
              <span class="text-lg pl-2">Templates</span>
            
          </div>
          <div class="flex justify-between items-center lg:w-70 lg:rounded-full  rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white  lg:p-1 p-3 mb-2 group border-2 border-orange-600">
            <span class="text-lg pl-2">QR Code</span>
            
          </div>
          <div class="flex justify-between items-center lg:w-70 lg:rounded-full  rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white  lg:p-1 p-3 mb-2 group border-2 border-orange-600">
            <span class="text-lg pl-2">History</span>
            
          </div>
          </div>
        </div>

        <!-- White Card for Create Shift Button -->
        <div class="absolute flex justify-center left-0 right-0 mx-2 mb-6 rounded-lg group">
          <button class="w-[200px] py-4 bg-white border-2 border-orange-600 text-black rounded-lg hover:bg-orange-600 group-hover:text-white">+ Create Shift</button>
        </div>
      </div>
    </div>
   
 

    <main class="mt-4">
      <!-- Manage Roster Section -->

     

      <!-- Shift Cards -->
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- breakfast -->
        <div class="bg-white p-4 border-2 border-green-600 hover:bg-green-600 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">BreakFast</span>
            </div>
            <div class="text-green-600 group-hover:text-white">
              <i class="fa fa-edit"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">06:00 - 12:00</p>
            <img src="{{ asset('assets/onti/images/breakfast1.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>

        <!-- Lunch -->
        <div class="bg-white p-4 border-2 border-orange-500 hover:bg-orange-500 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">Lunch</span>
            </div>
            <div>
              <i class="fa fa-edit text-orange-400 group-hover:text-white"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">12:00 - 16:30</p>
            <img src="{{ asset('assets/onti/images/lunch.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>

        <!-- Dinner -->
        <div class="bg-white p-4 border-2 border-blue-400 hover:bg-blue-400 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">Dinner</span>
            </div>
            <div class="text-blue-400 group-hover:text-white">
              <i class="fa fa-edit"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">16:30 - 22:00</p>
            <img src="{{ asset('assets/onti/images/dinner.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>

        <!-- Brunch -->
        <div class="bg-white p-4 border-2 border-purple-500 hover:bg-purple-500 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">Brunch</span>
            </div>
            <div>
              <i class="fa fa-edit text-purple-500 group-hover:text-white"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">06:00 - 12:00</p>
            <img src="{{ asset('assets/onti/images/brunch-2.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>

        <!-- Chill -->
        <div class="bg-white p-4 border-2 border-orange-600 hover:bg-orange-600 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">Chill</span>
            </div>
            <div>
              <i class="fa fa-edit text-orange-600 group-hover:text-white"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">14:54 - 18:30</p>
            <img src="{{ asset('assets/onti/images/chill.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>

        <!-- Snacks -->
        <div class="bg-white p-4 border-2 border-fuchsia-500 hover:bg-fuchsia-500 hover:text-white rounded-lg shadow-lg mb-4 group">
          <div class="flex justify-between items-center">
            <div>
              <span class="text-xl font-medium">Snacks</span>
            </div>
            <div>
              <i class="fa fa-edit text-fuchsia-500 group-hover:text-white"></i>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <p class="text-sm mr-2 relative">17:00 - 19:00</p>
            <img src="{{ asset('assets/onti/images/snack2.png') }}" alt="" class="mb-12 w-8 h-8 absolute text-lg">
          </div>
        </div>
      </div>

<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-medium">Roster Hours Controls</h2>
       <a href="{{ route('hours_controls') }}">
  <i class="fa fa-edit text-red-600"></i> <!-- Your pen icon -->
</a>
    </div>

    <!-- Table Layout -->
    <div class="grid grid-cols-7 gap-4">
        <div class="text-center">
            <span class="block text-sm text-orange-600">Mon</span>
            <span class="text-sm">40 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Tue</span>
            <span class="text-sm">55 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Wed</span>
            <span class="text-sm">58 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Thu</span>
            <span class="text-sm">60 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Fri</span>
            <span class="text-sm">56 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Sat</span>
            <span class="text-sm">62 hrs</span>
        </div>
        <div class="text-center">
            <span class="block text-sm text-orange-600">Sun</span>
            <span class="text-sm">54 hrs</span>
        </div>
    </div>

    <!-- Weekly Total -->
    <div class="flex justify-between items-center mt-4">
        <span class="text-lg font-semibold">Weekly Total</span>
        <span class="text-lg text-orange-600">385 hrs</span>
    </div>
</div>


    </main>
    
  </div>

  <script>
    function toggleSection(sectionId) {
      const section = document.getElementById(sectionId);
      const button = section.previousElementSibling.querySelector('button');
      
      if (section.style.display === "none" || section.style.display === "") {
        section.style.display = "block";
        button.textContent = "-"; // Change "+" to "-"
      } else {
        section.style.display = "none";
        button.textContent = "+"; // Change "-" to "+"
      }
    }
  </script>
@endsection
