<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BNVET Clinic</title>
    <!-- TailwindCSS CDN (for simplicity, in a real project use npm install tailwindcss) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN (for simplicity, in a real project use npm install bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex h-screen">
        <!-- Sidebar Navigation -->
        <aside class="bg-gray-800 text-gray-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            <a href="#" class="text-white flex items-center space-x-2 px-4">
                <span class="text-2xl font-extrabold">BNVET Clinic</span>
            </a>

            <nav>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Patients</a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Appointments</a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Billing</a>
                <!-- Add more navigation items as needed -->
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="flex justify-between items-center bg-white p-4 shadow-md">
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700 md:hidden">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-semibold text-gray-800">Admin Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, Admin!</span>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Profile</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Logout</a>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Card: Total Patients -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Patients</h2>
                        <p class="text-3xl font-bold text-gray-900">1,234</p>
                    </div>
                    <!-- Card: Total Appointments -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Appointments</h2>
                        <p class="text-3xl font-bold text-gray-900">567</p>
                    </div>
                    <!-- Add more cards as needed -->
                </div>

                <!-- Table: Recent Patients -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Recent Patients</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Last Visit</th>
                                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-26</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="bg-green-200 text-green-800 py-1 px-2 rounded-full text-xs">Active</span></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-10-25</td>
                                    <td class="py-2 px-4 border-b border-gray-200"><span class="bg-yellow-200 text-yellow-800 py-1 px-2 rounded-full text-xs">Pending</span></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS CDN (for simplicity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>