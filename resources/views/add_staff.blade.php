<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100 min-h-screen">


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
    <div class="bg-white shadow-md rounded-lg p-4 md:p-8 max-w-6xl mx-auto my-8">
        <div class="flex items-center justify-between pb-4 border-b border-gray-200 mb-6">
            <div class="flex items-center gap-2">
                <a href="#" class="text-gray-500 hover:text-gray-700">
                    
                </a>
                <h1 class="text-xl md:text-2xl font-semibold text-gray-800">Add Staff</h1>
            </div>
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center space-x-4">
                    
                    
                    
                    
                </div>
                
            </div>
        </div>


        <div class="flex-shrink-0 flex flex-col items-center justify-center md:justify-start gap-4 p-4 md:p-0">
                <div class="profile-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <button class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition-colors text-sm">Upload</button>
                <button class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition-colors text-sm">Select Access Control Level*</button>
            </div>

        <div class="flex flex-col md:flex-row gap-8">
            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                <div class="col-span-1">
                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="col-span-1">
                    <label for="taxFileNumber" class="block text-sm font-medium text-gray-700 mb-1">Tax File Number</label>
                    <input type="text" id="taxFileNumber" name="taxFileNumber" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="col-span-1">
                    <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                    <div class="relative">
                        <input type="text" id="dob" name="dob" value="06/2025" class="w-full p-2 border border-gray-300 rounded-md pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h.01M16 11h.01M9 15h.01M15 15h.01M9 19h.01M15 19h.01M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-span-1">
                    <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Login Password</label>
                    <input type="password" id="loginPassword" name="loginPassword" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="col-span-1">
                    <label for="positionRank" class="block text-sm font-medium text-gray-700 mb-1">Position / Rank</label>
                    <input type="text" id="positionRank" name="positionRank" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="col-span-1">
                    <label for="employmentType" class="block text-sm font-medium text-gray-700 mb-1">Employment Type</label>
                    <select id="employmentType" name="employmentType" class="w-full p-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="fullTime">Full Time</option>
                        <option value="partTime">Part Time</option>
                        <option value="contract">Contract</option>
                    </select>
                </div>
                <div class="col-span-1">
                    <label for="weeklySalary" class="block text-sm font-medium text-gray-700 mb-1">Weekly Salary</label>
                    <input type="text" id="weeklySalary" name="weeklySalary" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="col-span-1">
                    <label for="mobileNo" class="block text-sm font-medium text-gray-700 mb-1">Mobile No.</label>
                    <input type="text" id="mobileNo" name="mobileNo" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="col-span-1">
                    <label for="emergencyContact" class="block text-sm font-medium text-gray-700 mb-1">Emergency Contact</label>
                    <div class="flex gap-2">
                        <input type="text" id="emergencyContactName" name="emergencyContactName" placeholder="Name" class="flex-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="text" id="emergencyContactPhone" name="emergencyContactPhone" placeholder="Phone Number" class="flex-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <label for="residentialAddress" class="block text-sm font-medium text-gray-700 mb-1">Residential Address</label>
                    <textarea id="residentialAddress" name="residentialAddress" rows="3" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>

            
        </div>

        <div class="mt-8 text-center">
            <button class="bg-orange-500 text-white font-semibold px-12 py-3 rounded-md hover:bg-orange-600 transition-colors text-lg shadow-lg">Save</button>
        </div>
    </div>
    <style>
       
        .profile-avatar {
            width: 120px;
            height: 120px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #888;
            font-size: 60px;
        }
    </style>
</body>
</html>