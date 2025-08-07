<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles if needed */
        .sidebar {
            width: 250px;
            background-color: #f8f8f8;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 20px;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased flex">

    <!-- Sidebar -->
    <aside class="sidebar h-screen flex flex-col">
        <div class="text-center mb-6">
            <img src="https://via.placeholder.com/100" alt="Patient Avatar" class="rounded-full mx-auto mb-2">
            <h2 class="text-xl font-semibold">Hana Melaku</h2>
        </div>
        <nav class="flex-grow">
            <ul>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">Dashboard</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">My Appointments</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">Medical Records</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">Billing & Payments</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">Profile</a></li>
                <li class="mb-3"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <!-- Top Navbar -->
        <header class="navbar flex items-center justify-between p-4">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/40x40" alt="MVEI Clinic Logo" class="mr-3">
                <span class="text-xl font-bold">MVEI Clinic</span>
            </div>
            <div class="flex items-center">
                <button class="p-2 rounded-full hover:bg-gray-200 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <span class="mr-2">Hana Melaku</span>
                <img src="https://via.placeholder.com/30" alt="Patient Avatar" class="rounded-full">
                <!-- Language switcher can be added here -->
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-6 flex-1 overflow-y-auto">
            <!-- Welcome Card -->
            <section class="card mb-6">
                <h1 class="text-2xl font-bold mb-2">Welcome back, Hana!</h1>
                <p class="text-gray-600">Your next appointment is on <strong>October 26, 2023 at 10:00 AM</strong> with Dr. Smith.</p>
            </section>

            <!-- Health Overview Cards -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="card">
                    <h3 class="text-lg font-semibold mb-2">Upcoming Appointments</h3>
                    <p class="text-3xl font-bold">3</p>
                    <p class="text-gray-600">Next: Oct 26, 2023 (Dr. Smith)</p>
                </div>
                <div class="card">
                    <h3 class="text-lg font-semibold mb-2">Medical Records</h3>
                    <p class="text-3xl font-bold">12</p>
                    <p class="text-gray-600">Total records available</p>
                </div>
                <div class="card">
                    <h3 class="text-lg font-semibold mb-2">Prescriptions</h3>
                    <p class="text-3xl font-bold">2</p>
                    <p class="text-gray-600">Active medications</p>
                </div>
                <div class="card">
                    <h3 class="text-lg font-semibold mb-2">Invoices</h3>
                    <p class="text-3xl font-bold">$150.00</p>
                    <p class="text-gray-600">Outstanding balance</p>
                </div>
            </section>

            <!-- Quick Access Buttons -->
            <section class="flex flex-wrap gap-4 mb-6">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md">Book New Appointment</button>
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-md">View Test Results</button>
                <button class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-3 px-6 rounded-lg shadow-md">Pay Bill</button>
            </section>

            <!-- Recent Activity -->
            <section class="card">
                <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left">Date</th>
                                <th class="py-2 px-4 border-b text-left">Doctor</th>
                                <th class="py-2 px-4 border-b text-left">Notes/Treatment</th>
                                <th class="py-2 px-4 border-b text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">Oct 15, 2023</td>
                                <td class="py-2 px-4 border-b">Dr. Emily White</td>
                                <td class="py-2 px-4 border-b">Annual check-up, blood test ordered.</td>
                                <td class="py-2 px-4 border-b"><button class="text-blue-500 hover:underline">Download PDF</button></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Sep 20, 2023</td>
                                <td class="py-2 px-4 border-b">Dr. John Doe</td>
                                <td class="py-2 px-4 border-b">Follow-up for flu, prescribed antibiotics.</td>
                                <td class="py-2 px-4 border-b"><button class="text-blue-500 hover:underline">Download PDF</button></td>
                            </tr>
                            <!-- More rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>
</html>