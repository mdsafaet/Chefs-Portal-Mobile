<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- SECOND NAVBAR: Tabs and Icons -->
<div class="bg-gradient-to-r from-green-500 to-teal-500 shadow-sm border-t border-gray-200 mt-6 mb-6 rounded-xl" x-data="{ showIcons: false }">
    <div class="flex flex-col lg:flex-row items-center justify-between px-6 py-4 gap-4">

        <!-- Tab and Hamburger -->
        <div class="w-full flex justify-between items-center lg:w-auto">
            <button class="px-6 py-2 border rounded text-white border-white font-semibold text-sm shadow-sm">
                Statistics
            </button>
            <!-- Hamburger Icon (Mobile Only) -->
            <button @click="showIcons = !showIcons" class="text-2xl lg:hidden text-white">
                &#9776;
            </button>
        </div>

        <!-- Icon Buttons -->
        <div class="w-full lg:w-auto" :class="showIcons ? 'block' : 'hidden lg:block'">
            <div
                class="bg-gray-50 lg:bg-transparent p-4 rounded-lg shadow lg:shadow-none grid grid-cols-3 sm:grid-cols-6 gap-4 text-xl justify-items-center">
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Delivery">
                    <img src="https://chef.ordersplus.com.au/img/express-delivery.png" alt="Delivery" class="h-8 w-8" />
                </a>
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Calendar">
                    <img src="https://chef.ordersplus.com.au/img/logo_icons/roster_icon.png" alt="Calendar"
                        class="h-8 w-8" />
                </a>
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Meal">
                    <img src="https://chef.ordersplus.com.au/img/logo_icons/online_ordering.png" alt="Meal"
                        class="h-8 w-8" />
                </a>
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Ingredients">
                    <img src="https://chef.ordersplus.com.au/img/logo_icons/pantry.png" alt="Ingredients"
                        class="h-8 w-8" />
                </a>
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Tasks">
                    <img src="https://chef.ordersplus.com.au/img/logo_icons/prep-list.png" alt="Tasks"
                        class="h-8 w-8" />
                </a>
                <a href="#" class="p-2 hover:bg-orange-100 rounded-full" title="Cart">
                    <img src="https://chef.ordersplus.com.au/img/logo_icons/cart_icon.png" alt="Cart" class="h-8 w-8" />
                </a>
            </div>
        </div>
    </div>
</div>