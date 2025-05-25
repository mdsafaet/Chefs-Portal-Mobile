<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Row</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-gray-50 text-gray-800">
    <!-- TOP NAVBAR -->
    <nav class="bg-white shadow-md p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="md:w-1/4 flex justify-center md:justify-start">
        <img
          src="https://chef.ordersplus.com.au/img/logo_icons/orderplus_chef_logo.png"
          alt="Logo"
          class="h-16 md:h-20 w-auto rounded-2xl shadow-inner"
        />
      </div>
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









<div class="bg-white rounded-lg shadow border p-4 flex flex-wrap lg:flex-nowrap items-start gap-4 w-full max-w-7xl mx-auto">
<!-- Image -->
<img src="https://via.placeholder.com/80" alt="Beef Tenderloin" class="w-24 h-24 rounded object-cover" />
<!-- Product Details -->
<div class="flex flex-col justify-between w-52">
<div class="font-semibold text-lg">Beef Tenderloin</div>
<div class="text-sm text-gray-600">1 kg /</div>
<div class="text-blue-600 font-semibold">$ 54.00</div>
</div>
 
    <!-- Supplier Info -->
<div class="flex flex-col justify-between text-sm w-52">
<div class="font-semibold">ABC Meat & Poultry</div>
<div>SKU: BTL-12345</div>
<div class="text-green-600 font-medium">In Stock</div>
<div class="text-gray-500">Next Del: 26/05/2023</div>
</div>
 
    <!-- Quantity Controls -->
<div class="flex flex-col items-center w-40 gap-2">
<div class="font-semibold">QTY Required</div>
<div class="flex items-center space-x-2">
<button class="bg-orange-500 text-white px-2 py-1 rounded font-bold">+</button>
<span class="font-semibold text-lg">2</span>
<button class="bg-gray-600 text-white px-2 py-1 rounded font-bold">-</button>
</div>
<button class="bg-orange-500 text-white text-sm px-4 py-1 rounded">Price: $ 108.00 gst incl</button>
</div>
 
    <!-- Notes and Actions -->
<div class="flex flex-col gap-2 flex-1">
<textarea class="w-full border-2 border-orange-300 rounded px-2 py-1 resize-none" rows="3">Hello</textarea>
<div class="flex flex-col gap-2">
<button class="bg-green-500 text-white px-4 py-1 rounded text-sm">💾 Save Notes</button>
<button class="bg-orange-500 text-white px-4 py-1 rounded text-sm">🛒 Add to Order</button>
<button class="bg-red-500 text-white px-4 py-1 rounded text-sm">🗑 Remove</button>
</div>
</div>
 
  </div>
</body>
</html>