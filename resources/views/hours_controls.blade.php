@extends('layouts.layout')

@section('content')
<body class="bg-gray-100">
  <div class="md:max-w-7xl max-w-xs mx-auto p-3 lg:p-0  lg:mt-0 mt-4">
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
    <div class=" lg:bg-white  p-5 rounded-lg pb-10 shadow-lg relative">
        <p class="absolute inset-0 flex items-center justify-end  font-bold text-xl lg:mr-3   mb-68">Head Chef</p>
    <div class="flex gap-2 justify-center">

  
 <h1 class="relative text-xl md:text-2xl lg:text-center hidden md:block lg:mb-2    font-bold">Set Roster Hours </h1>
  <img src="{{ asset('assets/onti/images/roster.png') }}" alt="" class=" w-12 h-12 text-lg hidden md:block">
    </div>
        <!-- Roster Settings -->
        <div class="mb-4 lg:ml-90">
          <div class="flex justify-between items-center lg:w-130 lg:rounded-full rounded-lg shadow-lg bg-white hover:bg-orange-600 hover:text-white p-3 border-2 border-orange-600">
            <span class="text-lg">Roster Settings</span>
            <button class="text-2xl rounded-full pl-2 pr-2 group-hover:bg-white group-hover:text-black border-2 rounded bg-red-500" onclick="toggleSection('rosterSettings')">+</button>
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

  
      </div>
    </div>
    <!-- Header Section -->
     
    <!-- Main Container -->
    <div class="container mx-auto p-3 max-w-xs md:max-w-7xl">
         <div class="flex justify-center">
<img src="{{ asset('assets/onti/images/roster.png') }}" alt="" class=" w-12 h-12 text-lg md:hidden">  
         </div>
             
  <h1 class="text-xl md:text-2xl block lg:mb-2 font-bold">Set Roster Hours for Shifts</h1>
   

        <!-- Mobile Layout (stacked) -->
        <div class="block md:hidden">
            <!-- Day Selection -->
            <div class="mb-6">
                <label for="day" class="block text-gray-700 font-semibold mb-2">Day</label>
                <select id="day" class="w-full p-2 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                </select>
            </div>

            <!-- Shift Input (Breakfast) -->
            <div class="mb-6">
                <label for="breakfast" class="block text-gray-700 font-semibold mb-2">Breakfast</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('breakfast')">-</button>
                    <input id="breakfast" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('breakfast')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfast')">+</button>
                </div>
            </div>
            <div class="mb-6">
                <label for="lunch" class="block text-gray-700 font-semibold mb-2">Lunch</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('lunch')">-</button>
                    <input id="lunch" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('lunch')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunch')">+</button>
                </div>
            </div>
            <div class="mb-6">
                <label for="dinner" class="block text-gray-700 font-semibold mb-2">Dinner</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('dinner')">-</button>
                    <input id="dinner" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('dinner')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinner')">+</button>
                </div>
            </div>
            <div class="mb-6">
                <label for="brunch" class="block text-gray-700 font-semibold mb-2">Brunch</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('brunch')">-</button>
                    <input id="brunch" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('brunch')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunch')">+</button>
                </div>
            </div>
            <div class="mb-6">
                <label for="chills" class="block text-gray-700 font-semibold mb-2">Chills</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('chills')">-</button>
                    <input id="chills" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('chills')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chills')">+</button>
                </div>
            </div>
            <div class="mb-6">
                <label for="snacks" class="block text-gray-700 font-semibold mb-2">Snacks</label>
                <div class="flex items-center justify-between border-2 border-orange-500 rounded-lg p-1">
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('snacks')">-</button>
                    <input id="snacks" type="number" class="w-10 sm:w-12 text-center p-1  focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('snacks')" />
                    <button class="px-1 py-0 bg-orange-500 text-white   rounded-full pl-2 pr-2 rounded hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacks')">+</button>
                </div>
            </div>

            <!-- Save Button -->
            <div class="text-center">
                <button class="w-full py-3 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-400 transition duration-300">Save</button>
            </div>
        </div>

        <!-- Desktop Layout (Table) -->
        <div class="hidden md:block">
            <div class="overflow-x-auto bg-white shadow-lg rounded-lg ">
                <table class="table-auto w-full text-center ">
                    <thead class=" text-orange-500 border-b  ">
                        <tr class="" >
                            <th class="px-1 py-1 text-xs sm:text-sm ">Shift</th>
                            <th class="px-1 py-1 text-xs sm:text-sm ">Mon</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Tue</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Wed</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Thu</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Fri</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Sat</th>
                            <th class="px-1 py-1 text-xs sm:text-sm">Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="font-semibold text-gray-700 py-2 mt-6">Breakfast</td>
                            <td class="px-2 py-4">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastMon')">-</button>
                                    <input id="breakfastMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('breakfastMon')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastMon')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2 " onclick="decrease('breakfastTue')">-</button>
                                    <input id="breakfastTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastTue')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastTue')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastWed')">-</button>
                                    <input id="breakfastWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastWed')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastWed')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastThu')">-</button>
                                    <input id="breakfastThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastWed')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastThu')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastFri')">-</button>
                                    <input id="breakfastFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastWed')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastFri')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastSat')">-</button>
                                    <input id="breakfastSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastWed')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastSat')">+</button>
                                </div>
                            </td>
                            <td class="px-2 py-1">
                                <div class="flex items-center justify-center space-x-0.5">
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('breakfastSun')">-</button>
                                    <input id="breakfastSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('breakfastWed')" />
                                    <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('breakfastSun')">+</button>
                                </div>
                            </td>
                           
                        </tr>
<!-- lunch -->
                        <tr class="">
    <td class="font-semibold text-gray-700 py-2  mt-6">Lunch</td>
    <td class="px-2 py-4">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchMon')">-</button>
            <input id="lunchMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('lunchMon')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchMon')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchTue')">-</button>
            <input id="lunchTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchTue')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchTue')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchWed')">-</button>
            <input id="lunchWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchWed')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchWed')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchThu')">-</button>
            <input id="lunchThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchThu')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchThu')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchFri')">-</button>
            <input id="lunchFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchFri')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchFri')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchSat')">-</button>
            <input id="lunchSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchSat')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchSat')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('lunchSun')">-</button>
            <input id="lunchSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('lunchSun')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('lunchSun')">+</button>
        </div>
    </td>
</tr>
<!-- dinner -->
 <tr class="">
    <td class="font-semibold text-gray-700 py-2 mt-6">Dinner</td>
    <td class="px-2 py-4">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerMon')">-</button>
            <input id="dinnerMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('dinnerMon')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerMon')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerTue')">-</button>
            <input id="dinnerTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerTue')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerTue')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerWed')">-</button>
            <input id="dinnerWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerWed')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerWed')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerThu')">-</button>
            <input id="dinnerThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerThu')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerThu')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerFri')">-</button>
            <input id="dinnerFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerFri')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerFri')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerSat')">-</button>
            <input id="dinnerSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerSat')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerSat')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('dinnerSun')">-</button>
            <input id="dinnerSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('dinnerSun')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('dinnerSun')">+</button>
        </div>
    </td>
</tr>
<!-- Brunch -->
<tr class="">
    <td class="font-semibold text-gray-700 py-2 mt-6">Brunch</td>
    <td class="px-2 py-4">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchMon')">-</button>
            <input id="brunchMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('brunchMon')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchMon')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchTue')">-</button>
            <input id="brunchTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchTue')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchTue')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchWed')">-</button>
            <input id="brunchWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchWed')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchWed')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchThu')">-</button>
            <input id="brunchThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchThu')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchThu')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchFri')">-</button>
            <input id="brunchFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchFri')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchFri')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchSat')">-</button>
            <input id="brunchSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchSat')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchSat')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('brunchSun')">-</button>
            <input id="brunchSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('brunchSun')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('brunchSun')">+</button>
        </div>
    </td>
</tr>
<!-- Chills -->
 <tr class="">
    <td class="font-semibold text-gray-700 py-2 mt-6">Chill</td>
    <td class="px-2 py-4">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillMon')">-</button>
            <input id="chillMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('chillMon')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillMon')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillTue')">-</button>
            <input id="chillTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillTue')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillTue')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillWed')">-</button>
            <input id="chillWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillWed')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillWed')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillThu')">-</button>
            <input id="chillThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillThu')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillThu')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillFri')">-</button>
            <input id="chillFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillFri')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillFri')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillSat')">-</button>
            <input id="chillSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillSat')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillSat')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('chillSun')">-</button>
            <input id="chillSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('chillSun')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('chillSun')">+</button>
        </div>
    </td>
</tr>
<!-- snacks -->
 <tr class="">
    <td class="font-semibold text-gray-700 py-2 mt-6">Snacks</td>
    <td class="px-2 py-4">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksMon')">-</button>
            <input id="snacksMon" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="10" onchange="validateInput('snacksMon')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksMon')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksTue')">-</button>
            <input id="snacksTue" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksTue')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksTue')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksWed')">-</button>
            <input id="snacksWed" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksWed')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksWed')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksThu')">-</button>
            <input id="snacksThu" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksThu')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksThu')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksFri')">-</button>
            <input id="snacksFri" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksFri')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksFri')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksSat')">-</button>
            <input id="snacksSat" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksSat')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksSat')">+</button>
        </div>
    </td>
    <td class="px-2 py-1">
        <div class="flex items-center justify-center space-x-0.5">
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="decrease('snacksSun')">-</button>
            <input id="snacksSun" type="number" class="w-10 sm:w-12 text-center px-1 py-0.5 border border-orange-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="14" onchange="validateInput('snacksSun')" />
            <button class="px-1 py-0 bg-orange-500 text-white  rounded-lg hover:bg-white hover:text-orange-500 hover:border-2" onclick="increase('snacksSun')">+</button>
        </div>
    </td>
</tr>

                    </tbody>
                </table>
            </div>

            <!-- Save Button -->
            <div class="flex justify-center mt-6">
                <button class="px-8 py-4 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-400 transition duration-300">Save</button>
            </div>
        </div>
    </div>
<!-- js for calendar -->
    <script>
        function increase(id) {
            let element = document.getElementById(id);
            let value = parseInt(element.value);
            element.value = value + 1;
        }

        function decrease(id) {
            let element = document.getElementById(id);
            let value = parseInt(element.value);
            if (value > 0) {
                element.value = value - 1;
            }
        }

        function validateInput(id) {
            let element = document.getElementById(id);
            let value = parseInt(element.value);
            if (isNaN(value) || value < 0) {
                element.value = 0; // Set to 0 if the input is invalid
            }
        }
    </script>
    <!-- js for main page -->
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
</body>
@endsection
