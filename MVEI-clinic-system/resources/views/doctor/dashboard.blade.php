<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex-shrink-0">
            <div class="p-4 text-2xl font-bold">Doctor Panel</div>
            <nav class="mt-4">
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Appointments</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Patients</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white w-full text-left">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="flex justify-between items-center bg-white p-4 shadow-md">
                <h1 class="text-3xl font-semibold text-gray-800">Doctor Dashboard</h1>
                <div class="flex items-center">
                    <span class="mr-4 text-gray-700">Welcome, Doctor!</span>
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-full">
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- KPI Card 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Patients</h2>
                        <p class="text-4xl font-bold text-blue-600">1,234</p>
                    </div>
                    <!-- KPI Card 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Upcoming Appointments</h2>
                        <p class="text-4xl font-bold text-green-600">45</p>
                    </div>
                    <!-- KPI Card 3 -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Completed Consultations</h2>
                        <p class="text-4xl font-bold text-purple-600">876</p>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Monthly Consultations</h2>
                    <canvas id="consultationsChart"></canvas>
                </div>

                <!-- Recent Activity/Appointments Table -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Recent Appointments</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Patient Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Time</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-26</td>
                                    <td class="py-2 px-4 border-b border-gray-200">10:00 AM</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-26</td>
                                    <td class="py-2 px-4 border-b border-gray-200">11:30 AM</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                                </tr>
                                <!-- More rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('consultationsChart').getContext('2d');
        const consultationsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Consultations',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>