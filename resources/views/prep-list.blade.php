@extends('layouts.layout')

@section('content')
<body class="bg-gray-50 font-sans leading-tight">

<div class="container mx-auto p-5">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6 flex-wrap">
        <div class="flex space-x-4 mb-4 sm:mb-0">
            <button id="action-button" onclick="toggleDropdown(event)" class="bg-orange-600 text-white px-4 py-2 rounded-full flex items-center">
                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-4 4m4-4l4 4" />
                </svg>
                Action
            </button>
            <div id="dropdown-menu" class="hidden bg-white shadow-lg rounded-lg mt-2 w-48 absolute z-10">
                <ul>
                    <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">Manage Order</li>
                    <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">Check Delivery</li>
                    <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">View Orders</li>
                </ul>
            </div>
        </div>
        <button onclick="openModal()" class="bg-orange-600 text-white px-6 py-2 rounded-full flex items-center hover:bg-orange-700 transition sm:ml-4">
            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13l4 4L12 7l5 5l5-5l-4-4L12 7 7 12z" />
            </svg>
            + Add Task
        </button>
    </div>

    <!-- Section Buttons -->
    <div class="mb-4  lg:flex flex-wrap  gap-4 justify-center sm:justify-start">
        <button onclick="filterTasks('All')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">All</button>
        <button onclick="filterTasks('Pan')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Pan</button>
        <button onclick="filterTasks('Ladder')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Ladder</button>
        <button onclick="filterTasks('Pizza')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Pizza</button>
        <button onclick="filterTasks('Dessert Section')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Dessert Section</button>
        <button onclick="filterTasks('Bar')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Bar</button>
        <button onclick="filterTasks('Kitchen Hand')" class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 px-4 py-2 rounded-full">Kitchen Hand</button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto">
            <thead class=" bg-gradient-to-r from-orange-600 to-orange-500 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Date</th>
                    <th class="px-6 py-3 text-left">Assigned To</th>
                    <th class="px-6 py-3 text-left">Prep Item</th>
                    <th class="px-6 py-3 text-left">Qty Required</th>
                    <th class="px-6 py-3 text-left">Time Start</th>
                    
                    <th class="px-6 py-3 text-left">Completed</th>
                    <th class="px-6 py-3 text-left">Time Count</th>
                    <th class="px-6 py-3 text-left">Action</th>
                    <th class="px-6 py-3 text-left">Delete</th>
                </tr>
            </thead>
            <tbody id="taskTableBody"></tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="taskModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold">&times;</button>
        <h2 class="text-xl font-semibold mb-4">Add Task to Section Prep-List</h2>
        <div class="space-y-4">
            <select id="taskSection" class="w-full border border-gray-300 p-2 rounded">
                <option>Select Task Section</option>
                <option>Pan</option>
                <option>Ladder</option>
                <option>Pizza</option>
                <option>Dessert Section</option>
                <option>Bar</option>
                <option>Kitchen Hand</option>
            </select>
            <input id="prepItem" type="text" placeholder="Enter Prep Item" class="w-full border border-gray-300 p-2 rounded">
            <div class="flex gap-4">
                <input id="quantity" type="text" placeholder="Enter Quantity Required" class="w-1/2 border border-gray-300 p-2 rounded">
                <input id="unit" type="text" placeholder="Enter Unit" class="w-1/2 border border-gray-300 p-2 rounded">
            </div>
            <input id="date" type="date" class="w-full border border-gray-300 p-2 rounded">
        </div>
        <div class="mt-6 text-center">
            <button id="addTaskBtn" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-full">Add Task</button>
        </div>
    </div>
</div>

<script>
let currentFilter = "All";
let timers = {}; // Store active timers by task ID

function openModal() {
    document.getElementById('taskModal').classList.remove('hidden');
}
function closeModal() {
    document.getElementById('taskModal').classList.add('hidden');
}
function toggleDropdown(event) {
    event.stopPropagation();
    document.getElementById("dropdown-menu").classList.toggle("hidden");
}
document.addEventListener("click", function (event) {
    const dropdown = document.getElementById("dropdown-menu");
    const actionButton = document.getElementById("action-button");
    if (!actionButton.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add("hidden");
    }
});

window.onload = function () {
    const savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
    savedTasks.forEach(task => addTaskToTable(task, false));
};

document.getElementById('addTaskBtn').addEventListener('click', function () {
    const section = document.getElementById('taskSection').value;
    const item = document.getElementById('prepItem').value;
    const quantity = document.getElementById('quantity').value;
    const unit = document.getElementById('unit').value;
    const date = document.getElementById('date').value;
    if (!section || section === "Select Task Section" || !item || !quantity || !unit || !date) {
        alert("Please fill out all fields.");
        return;
    }
    const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    const task = {
        id: Date.now(), date, section, item,
        quantity, unit, timeStart: currentTime
    };
    addTaskToTable(task, true);
    closeModal();
    document.getElementById('taskSection').selectedIndex = 0;
    document.getElementById('prepItem').value = '';
    document.getElementById('quantity').value = '';
    document.getElementById('unit').value = '';
    document.getElementById('date').value = '';
});

function addTaskToTable(task, save = true) {
    const table = document.getElementById('taskTableBody');
    const row = document.createElement('tr');
    row.setAttribute('data-section', task.section);
    row.setAttribute('data-id', task.id);
    row.className = "hover:bg-gray-100 transition duration-200";
    row.innerHTML = `
      <td class="px-6 py-4">${task.date}</td>
      <td class="px-6 py-4"></td>
      <td class="px-6 py-4">${task.item}</td>
      <td class="px-6 py-4">${task.quantity} ${task.unit}</td>
      <td class="px-6 py-4">${task.timeStart}</td>
      <td class="px-6 py-4 text-gray-400">--</td>
      <td class="px-6 py-4">
        <button onclick="startTimer(${task.id})" id="start-timer-${task.id}" class="bg-orange-600 text-white px-4 py-2 rounded-full flex items-center hover:bg-orange-700 transition">
          <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-4 4m4-4l4 4" />
          </svg>
          Start
        </button>
      </td>
      <td class="px-6 py-4">
        <button onclick="stopTimer(${task.id})" id="stop-timer-${task.id}" class="bg-green-600 text-white px-4 py-2 rounded-full flex items-center hover:bg-green-700 transition">
          <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          Complete
        </button>
      </td>
      <td class="px-6 py-4">
  <button onclick="deleteTask(${task.id})" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition">
    Delete
  </button>
</td>
    `;
    table.appendChild(row);
    if (save) {
        const savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
        savedTasks.push(task);
        localStorage.setItem('tasks', JSON.stringify(savedTasks));
    }
    if (currentFilter !== "All") filterTasks(currentFilter);
}

function startTimer(taskId) {
    const taskRow = document.querySelector(`tr[data-id='${taskId}']`);
    const startButton = document.getElementById(`start-timer-${taskId}`);
    const stopButton = document.getElementById(`stop-timer-${taskId}`);
    const timeDisplay = taskRow.querySelector('td:nth-child(6)'); // Get time display cell
    
    let seconds = 0;
    timers[taskId] = setInterval(() => {
        seconds++;
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        timeDisplay.textContent = `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
    }, 1000);
    
    startButton.disabled = true; // Disable start button while timer is running
    stopButton.disabled = false; // Enable stop button
}

function stopTimer(taskId) {
    const taskRow = document.querySelector(`tr[data-id='${taskId}']`);
    const startButton = document.getElementById(`start-timer-${taskId}`);
    const stopButton = document.getElementById(`stop-timer-${taskId}`);
    
    clearInterval(timers[taskId]);
    timers[taskId] = null;
    
    const timeDisplay = taskRow.querySelector('td:nth-child(6)');
    const timeText = timeDisplay.textContent;
    const [minutes, seconds] = timeText.split(':').map(num => parseInt(num));
    const totalTimeInMinutes = minutes + (seconds / 60);
    
    // Show a check icon in the "Completed" column
    const completedCell = taskRow.querySelector('td:nth-child(6)');
    completedCell.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                               </svg>`;

    // Show the total time in the "Time Count" column
    const timeCountCell = taskRow.querySelector('td:nth-child(7)');
    timeCountCell.textContent = `${totalTimeInMinutes.toFixed(2)} min`;
    
    // Optionally save the total time spent (in minutes) to local storage or the task object
    let savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
    const task = savedTasks.find(t => t.id === taskId);
    if (task) {
        task.timeCount = totalTimeInMinutes; // Save the total time
        task.completed = true; // Mark task as completed
        localStorage.setItem('tasks', JSON.stringify(savedTasks));
    }

    startButton.disabled = false; // Enable start button after stopping
    stopButton.disabled = true; // Disable stop button
}

function deleteTask(id) {
    let savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
    savedTasks = savedTasks.filter(task => task.id !== id);
    localStorage.setItem('tasks', JSON.stringify(savedTasks));
    const row = document.querySelector(`tr[data-id='${id}']`);
    if (row) row.remove();
}

function filterTasks(sectionName) {
    currentFilter = sectionName;
    const rows = document.querySelectorAll('#taskTableBody tr');
    rows.forEach(row => {
        const rowSection = row.getAttribute('data-section');
        row.style.display = (sectionName === 'All' || rowSection === sectionName) ? '' : 'none';
    });
}
</script>
<!-- Then define the deleteTask function -->
<script>
function deleteTask(id) {
    let savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
    savedTasks = savedTasks.filter(task => task.id !== id);
    localStorage.setItem('tasks', JSON.stringify(savedTasks));
    const row = document.querySelector(`tr[data-id='${id}']`);
    if (row) row.remove();
}
</script>

</body>
@endsection