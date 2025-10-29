<div class="p-6 text-gray-900">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold mb-2">Welcome back, {{ Auth::user()->name ?? 'User' }} 👋</h1>
        <p class="text-gray-600">
            Here's an overview of your dashboard activity and shortcuts to key areas.
        </p>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Card 1 -->
        <div class="bg-white border rounded-2xl shadow-sm p-6 flex items-center space-x-4 hover:shadow-md transition">
            <div class="p-3 bg-red-100 text-red-600 rounded-xl">
                <x-heroicon-o-user class="w-6 h-6" />
            </div>
            <div>
                <h2 class="text-gray-500 text-sm font-medium">Users</h2>
                <p class="text-xl font-bold text-gray-800">1,245</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border rounded-2xl shadow-sm p-6 flex items-center space-x-4 hover:shadow-md transition">
            <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                <x-heroicon-o-chart-bar class="w-6 h-6" />
            </div>
            <div>
                <h2 class="text-gray-500 text-sm font-medium">Monthly Sales</h2>
                <p class="text-xl font-bold text-gray-800">₱128,900</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border rounded-2xl shadow-sm p-6 flex items-center space-x-4 hover:shadow-md transition">
            <div class="p-3 bg-blue-100 text-blue-600 rounded-xl">
                <x-heroicon-o-bell class="w-6 h-6" />
            </div>
            <div>
                <h2 class="text-gray-500 text-sm font-medium">Notifications</h2>
                <p class="text-xl font-bold text-gray-800">5 new</p>
            </div>
        </div>
    </div>

    <!-- Quick Links Section -->
    <div>
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Action Card 1 -->
            <a href="{{ route('profile.show') }}" 
               class="bg-white border rounded-2xl p-6 hover:bg-red-50 transition shadow-sm hover:shadow-md">
                <div class="flex items-center mb-3">
                    <x-heroicon-o-cog class="w-5 h-5 text-red-600 mr-2" />
                    <span class="font-semibold text-gray-800">Manage Profile</span>
                </div>
                <p class="text-sm text-gray-600">Edit account details, change password, and manage settings.</p>
            </a>

            <!-- Action Card 2 -->
            <a href="#" 
               class="bg-white border rounded-2xl p-6 hover:bg-green-50 transition shadow-sm hover:shadow-md">
                <div class="flex items-center mb-3">
                    <x-heroicon-o-clipboard-document class="w-5 h-5 text-green-600 mr-2" />
                    <span class="font-semibold text-gray-800">View Reports</span>
                </div>
                <p class="text-sm text-gray-600">Access recent analytics, trends, and system summaries.</p>
            </a>

            <!-- Action Card 3 -->
            <a href="#" 
               class="bg-white border rounded-2xl p-6 hover:bg-blue-50 transition shadow-sm hover:shadow-md">
                <div class="flex items-center mb-3">
                    <x-heroicon-o-envelope class="w-5 h-5 text-blue-600 mr-2" />
                    <span class="font-semibold text-gray-800">Messages</span>
                </div>
                <p class="text-sm text-gray-600">Check your latest communications and notifications.</p>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-12 text-center text-sm text-gray-500">
        <p>Laravel {{ app()->version() }} | Powered by Tailwind CSS</p>
    </div>
</div>
