<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main Flex Container for Sidebar and Main Content -->
    <div class="flex">
      <!-- Left Sidebar -->
<aside class="sidebar w-64 h-screen bg-gray-900 text-gray-100 shadow-lg">
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4" style="color: #b22222;">RobbinsBuilds</h2>
        <nav>
            <ul>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">Profile</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">Settings</a>
                </li>
                <!-- New Buttons -->
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">Reports</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">Analytics</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded">User Management</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


        <!-- Main Content -->
        <div class="dashboard-content flex-1 bg-gray-100 dark:bg-gray-800">
            <!-- Top Bar -->
            <div class="bg-white dark:bg-gray-700 p-6 shadow-sm">
                <h2 class="text-2xl font-semibold">Dashboard Overview</h2>
            </div>

            <!-- Dashboard Content -->
            <div class="p-6">
                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Total Users -->
                    <div class="card bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100">Total Users</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-200">{{ $totalUsers }}</p>
                    </div>

                    <!-- New Signups -->
                    <div class="card bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100">New Signups</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-200">{{ $newSignups }}</p>
                    </div>

                    <!-- Monthly Revenue -->
                    <div class="card bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100">Monthly Revenue</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-200">${{ number_format($monthlyRevenue, 2) }}</p>
                    </div>

                    <!-- Active Sessions -->
                    <div class="card bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100">Active Sessions</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-200">{{ $activeSessions }}</p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    <!-- User Growth Chart -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100 mb-4">User Growth</h3>
                        <canvas id="userGrowthChart" class="w-full h-64"></canvas>
                    </div>

                    <!-- Monthly Revenue Chart -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-100 mb-4">Monthly Revenue</h3>
                        <canvas id="revenueChart" class="w-full h-64"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script to Render the Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // User Growth Chart
        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        const userGrowthChart = new Chart(userGrowthCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'User Growth',
                    data: [30, 50, 40, 60, 80, 70, 100], // You can replace this with dynamic data from the backend.
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Monthly Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Revenue ($)',
                    data: [300, 500, 400, 600, 800, 700, 1000], // Replace with dynamic data.
                    backgroundColor: 'rgba(153, 102, 255, 0.5)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>