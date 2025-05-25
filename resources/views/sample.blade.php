<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chef Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-b from-orange-400 via-purple-700 to-indigo-900 min-h-screen text-white p-6 font-sans">

  <!-- Profile & Date -->
  <div class="flex justify-between items-center bg-gradient-to-r from-orange-500 to-red-400 rounded-2xl p-5 mb-6 shadow-lg">
    <div class="flex items-center gap-4">
      <img src="https://i.pravatar.cc/100" alt="Profile" class="w-16 h-16 rounded-full border-2 border-white" />
      <div>
        <h2 class="text-xl font-semibold">Spencer</h2>
        <p class="text-sm">Head Chef / Sous Chef</p>
      </div>
    </div>
    <div class="bg-red-500 rounded-xl p-3 text-center w-20 shadow-md">
      <p class="text-2xl font-bold">13</p>
      <p class="text-sm">Monday</p>
    </div>
  </div>

  <!-- Dashboard Buttons -->
  <div class="grid grid-cols-2 gap-4 mb-4">
    <!-- Deliveries -->
    <div class="bg-gradient-to-br from-red-500 to-orange-500 p-6 rounded-xl shadow-lg flex flex-col items-center">
      <i class="fas fa-truck text-3xl mb-3"></i>
      <span class="text-lg font-medium">Deliveries</span>
    </div>

    <!-- Master Pantry -->
    <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-6 rounded-xl shadow-lg flex flex-col items-center">
      <i class="fas fa-box-open text-3xl mb-3"></i>
      <span class="text-lg font-medium">Master Pantry</span>
    </div>

    <!-- Master Order List -->
    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 p-6 rounded-xl shadow-lg flex flex-col items-center">
      <i class="fas fa-clipboard-check text-3xl mb-3"></i>
      <span class="text-lg font-medium">Master Order List</span>
    </div>

    <!-- Team Roster -->
    <div class="bg-gradient-to-br from-orange-400 to-yellow-500 p-6 rounded-xl shadow-lg flex flex-col items-center">
      <i class="fas fa-users text-3xl mb-3"></i>
      <span class="text-lg font-medium">Team Roster</span>
    </div>
  </div>

  <div class="flex flex-col items-center">
  <!-- Supplier Button -->
  <div class="w-[50%] bg-gradient-to-r from-green-400 to-emerald-600 p-6 rounded-xl shadow-lg flex flex-col items-center justify-center">
    <i class="fas fa-store text-3xl mb-3"></i>
    <span class="text-lg font-medium">Supplier</span>
  </div>
  </div>

</body>
</html>
