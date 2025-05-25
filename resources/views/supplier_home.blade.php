<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Suppliers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
       
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen font-sans">
    <!-- TOP NAVBAR -->
    <nav class="bg-white shadow-md p-6 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
      <!-- Logo -->
      <div class="md:w-1/4">
        <img
          src="https://chef.ordersplus.com.au/img/logo_icons/orderplus_chef_logo.png"
          alt="Logo"
          class="h-20 w-auto mx-auto object-cover hidden md:mx-0 md:block"
        />
      </div>

      <!-- Restaurant Title -->
      <div class="md:w-2/4">
        <h1 class="text-xl text-center font-semibold text-gray-800">MEXING POT RESTAURANT</h1>
      </div>

      <!-- User Info -->
      <div class="md:w-1/4 flex items-center justify-center md:justify-end gap-4">
        <img
          src="https://cdn.pixabay.com/photo/2015/05/20/14/23/baby-775503_1280.jpg"
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
    <header class="bg-white shadow-sm py-3 px-4 flex items-center justify-between border-b border-gray-200">
        <div class="flex items-center gap-2">
            <a href="#" class="text-gray-500 hover:text-gray-700 p-2 rounded-full hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>
            <h1 class="text-xl md:text-2xl font-semibold text-gray-800 flex-grow text-center md:text-left">Manage Suppliers</h1>
        </div>

        <div class="flex items-center space-x-4">
            <div class="hidden md:flex items-center space-x-4">
                <div class="p-2 bg-blue-100 rounded-md text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 00-1 1v1a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1H7zM3 8a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8z" />
                    </svg>
                </div>
                <div class="p-2 bg-green-100 rounded-md text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v3a1 1 0 000 2.224 4 4 0 004 4.776 4 4 0 004-4.776A1 1 0 0014 9V6a4 4 0 00-4-4zm-2 9a1 1 0 001 1h2a1 1 0 100-2H9a1 1 0 00-1 1zm8-3V6a6 6 0 10-12 0v2H3a1 1 0 000 2.224A6 6 0 0010 18a6 6 0 007-7.776A1 1 0 0017 8h-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="p-2 bg-yellow-100 rounded-md text-yellow-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.414-1.414L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="p-2 bg-red-100 rounded-md text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                </div>
                <div class="p-2 bg-purple-100 rounded-md text-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="p-2 bg-gray-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-4 md:p-6 lg:p-8">
        <div class="flex flex-col sm:flex-row gap-3 mb-6">
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors shadow-sm text-sm sm:text-base">Main Menu</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors shadow-sm text-sm sm:text-base">Action</button>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <h2 class="text-lg font-semibold text-orange-500 mb-4">Categories</h2>
            <div class="flex flex-wrap gap-3 overflow-x-auto no-scrollbar pb-2 -mr-4 pr-4 md:flex-nowrap">
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">All Categories</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Fruit & Vegetables</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Meat & Poultry</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Seafood</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Dry Good</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Bakery & Patisserie</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Dairy & Cheese</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Coffee & Tea</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Alcohole</button>
                <button class="flex-shrink-0 px-4 py-2 border border-orange-400 text-orange-600 rounded-md hover:bg-orange-50 transition-colors text-sm">Dairy</button>
            </div>
        </div>

        <div class="flex justify-end mb-6">
            <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 transition-colors shadow-md text-sm sm:text-base">Connect Supplier Using Token</button>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Name of Supplier</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Contact Person</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Phone No.</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Products & Prices</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Supplier Details</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ABC Meat & Poultry</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Damen Deng</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0404670200</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 underline">damendeng2000@gmail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ABC Food Wholesale</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Adam Gibson</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0434891181</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 underline">admin@restauranttech.com.au</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>