<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex-shrink-0">
            <div class="p-4 text-2xl font-bold">Nurse Panel</div>
            <nav class="mt-4">
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Patients</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Appointments</a>
                <a href="#" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">Medications</a>
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
                <h1 class="text-3xl font-semibold text-gray-800">Nurse Dashboard</h1>
                <div class="flex items-center">
                    <span class="mr-4 text-gray-700">Welcome, Nurse!</span>
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
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Pending Tasks</h2>
                        <p class="text-4xl font-bold text-orange-600">15</p>
                    </div>
                    <!-- KPI Card 3 -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Medications Administered</h2>
                        <p class="text-4xl font-bold text-teal-600">567</p>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Patient Admissions</h2>
                    <canvas id="admissionsChart"></canvas>
                </div>

                <!-- Recent Activity/Appointments Table -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Recent Patient Visits</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Patient Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Reason</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Alice Johnson</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-25</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Follow-up</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Completed</span></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Bob Williams</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-24</td>
                                    <td class="py-2 px-4 border-b border-gray-200">New Patient</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Admitted</span></td>
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
        const ctx = document.getElementById('admissionsChart').getContext('2d');
        const admissionsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Admissions',
                    data: [5, 8, 12, 9, 15, 10, 13],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    fill: false
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