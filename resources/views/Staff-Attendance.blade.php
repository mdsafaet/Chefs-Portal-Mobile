<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link 
      <div class="md:w-2/4 text-center">
        <h1 class="text-xl md:text-2xl font-semibold">MEXING POT RESTAURANT</h1>
      </div>
      <div class="md:w-1/4 flex items-center justify-center md:justify-end gap-3">
        <img
          src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/afrbbciydcc8tgpxgxob"
          alt="User"
          class="w-12 h-12 md:w-14 md:h-14 rounded-full object-cover"
        />
        <div class="text-sm text-left">
          <div class="font-semibold">Adam Go</div>
          <div class="text-gray-500 text-xs">Head Chef</div>
          <button class="text-orange-500 text-xs mt-1 hover:underline">Log Out</button>
        </div>
      </div>
    </nav>

    <!-- SECOND NAVBAR -->
    <div class="bg-white shadow-sm border-t border-gray-200 mt-4">
      <div class="flex flex-col sm:flex-row items-center justify-between px-4 py-2 gap-2">
        <button class="rounded-full border border-gray-300 p-2 hover:bg-gray-100">
          <i class="fas fa-chevron-left text-gray-600"></i>
        </button>
        <h2 class="text-lg font-semibold text-center sm:mx-auto">Staff Attendance</h2>
        <div class="flex flex-wrap justify-center sm:justify-end gap-2">
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/express-delivery.png" alt="Delivery" />
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/logo_icons/roster_icon.png" alt="Calendar" />
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/logo_icons/online_ordering.png" alt="Meal" />
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/logo_icons/pantry.png" alt="Pantry" />
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/logo_icons/prep-list.png" alt="Prep List" />
          <img class="h-6 w-6 cursor-pointer hover:opacity-80" src="https://chef.ordersplus.com.au/img/logo_icons/cart_icon.png" alt="Cart" />
        </div>
      </div>
    </div>

    <!-- BUTTON GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-4 py-6 max-w-5xl mx-auto">
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow hover:bg-orange-600 text-lg font-semibold">Roster Setting</button>
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow hover:bg-orange-600 text-lg font-semibold">View Roster</button>
      <button class="bg-orange-500 text-white py-4 rounded-xl shadow hover:bg-orange-600 text-lg font-semibold">Suppliers</button>
    </div>

    <!-- MONTH NAVIGATION -->
    <div class="flex items-center justify-center gap-4 py-4">
      <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center">
        <i class="fas fa-chevron-left text-gray-700 text-sm"></i>
      </button>
      <h2 class="text-lg font-semibold">May</h2>
      <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center">
        <i class="fas fa-chevron-right text-gray-700 text-sm"></i>
      </button>
    </div>

    <!-- LEGEND + EXPORT BUTTON -->
    <div class="overflow-x-auto px-4 py-6">
      <div class="flex flex-wrap items-center gap-2 mb-4">
        <span class="bg-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full">R/H → Roster Assigned Hours</span>
        <span class="bg-blue-500 text-white text-xs font-semibold px-3 py-1 rounded-full">A/H → Actual Worked Hours</span>
        <button class="ml-auto bg-white border border-gray-200 px-4 py-2 rounded shadow text-sm font-medium hover:bg-gray-100 flex items-center gap-2">
          <i class="fas fa-download text-gray-600 text-xs"></i>
          Export as CSV
        </button>
      </div>

   <!-- Table -->
<div class="bg-white shadow rounded-lg overflow-hidden">
  <table class="w-full text-sm text-left text-gray-700">
    <thead class="bg-gray-50">
      <tr class="text-gray-500 font-semibold text-xs">
        <th class="px-4 py-2">&nbsp;</th>
        <th class="px-2 py-2 text-center">19<br><span class="font-normal text-[11px]">Monday</span></th>
        <th class="px-2 py-2 text-center">20<br><span class="font-normal text-[11px]">Tuesday</span></th>
        <th class="px-2 py-2 text-center">21<br><span class="font-normal text-[11px]">Wednesday</span></th>
        <th class="px-2 py-2 text-center">22<br><span class="font-normal text-[11px]">Thursday</span></th>
        <th class="px-2 py-2 text-center">23<br><span class="font-normal text-[11px]">Friday</span></th>
        <th class="px-2 py-2 text-center text-orange-600">24<br><span class="font-normal text-[11px]">Saturday</span></th>
        <th class="px-2 py-2 text-center">25<br><span class="font-normal text-[11px]">Sunday</span></th>
        <th class="px-4 py-2 text-center font-bold">Total/hr</th>
      </tr>
    </thead>
    <tbody>
      <!-- Row 1 -->
      <tr>
        <td class="flex items-center gap-3 px-4 py-2 whitespace-nowrap">
          <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-8 h-8 rounded-full object-cover" alt="Alex Hales">
          <div>
            <p class="text-sm font-medium text-orange-500">Alex Hales</p>
            <p class="text-xs text-gray-500">Chef</p>
          </div>
          <div>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">A/H</span></p>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">R/H</span></p>
          </div>
        </td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">N/A</span></td>
        <td class="text-center bg-orange-50">7<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">15.43<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">7<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">6<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">9.6<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center text-orange-600 font-bold">45.03<br><span class="text-blue-600 font-normal">0</span></td>
      </tr>

      <!-- Row 2 -->
      <tr>
        <td class="flex items-center gap-3 px-4 py-2 whitespace-nowrap">
          <img src="https://randomuser.me/api/portraits/women/2.jpg" class="w-8 h-8 rounded-full object-cover" alt="Natashia Mills">
          <div>
            <p class="text-sm font-medium text-green-600">Natashia Mills</p>
            <p class="text-xs text-gray-500">Pastry Chef</p>
          </div>
          <div>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">A/H</span></p>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">R/H</span></p>
          </div>
        </td>
        <td class="text-center bg-orange-50">N/A<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">7<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">6<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center text-orange-600 font-bold">13<br><span class="text-blue-600 font-normal">0</span></td>
      </tr>

      <!-- Row 3 -->
      <tr>
        <td class="flex items-center gap-3 px-4 py-2 whitespace-nowrap">
          <img src="https://randomuser.me/api/portraits/men/3.jpg" class="w-8 h-8 rounded-full object-cover" alt="John Cena">
          <div>
            <p class="text-sm font-medium text-teal-600">John Cena</p>
            <p class="text-xs text-gray-500">Chef de Partie</p>
          </div>
          <div>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">A/H</span></p>
            <p class="text-center bg-orange-50"><br><span class="text-blue-600">R/H</span></p>
          </div>
        </td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">3.6<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">3.6<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center bg-orange-50">0<br><span class="text-blue-600">0</span></td>
        <td class="text-center text-orange-600 font-bold">7.2<br><span class="text-blue-600 font-normal">0</span></td>
      </tr>
    </tbody>
  </table>
<h1>hi</h1>

      </div>
    </div>
  </body>
</html>
