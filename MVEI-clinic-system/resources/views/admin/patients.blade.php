@extends('layouts.app')

@section('content')
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md flex flex-col">
            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex items-center">
                <img src="https://via.placeholder.com/40" alt="Clinic Logo" class="h-10 w-10 mr-3 rounded-full">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">MVEI Clinic</h1>
            </div>
            <nav class="flex-1 p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-home mr-3"></i>Dashboard</a>
                <a href="{{ route('admin.patients') }}" class="flex items-center py-2 px-4 text-blue-600 dark:text-blue-400 rounded-lg bg-blue-100 dark:bg-blue-900"><i class="fas fa-users mr-3"></i>Patients</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-user-md mr-3"></i>Doctors</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-calendar-alt mr-3"></i>Appointments</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-file-invoice-dollar mr-3"></i>Billing</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-cogs mr-3"></i>Settings</a>
            </nav>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="w-full bg-white dark:bg-gray-800 shadow-md p-6 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Patients Management</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"><i class="fas fa-bell"></i></button>
                    <div class="relative">
                        <img src="https://via.placeholder.com/32" alt="Admin Avatar" class="rounded-full w-8 h-8">
                        <div class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-800 dark:text-white">Admin Name</span>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Patients</h1>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <i class="fas fa-plus mr-2"></i> Add New Patient
                    </button>
                </div>

                <!-- Tabs for Patients List and Patient Form -->
                <div class="mb-6">
                    <div class="border-b border-gray-200 dark:border-gray-700">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                            <a href="#" class="tab-button border-b-2 border-blue-500 py-4 px-1 text-center text-sm font-medium text-blue-600 dark:text-blue-400" data-tab="patients-list">Patients List</a>
                            <a href="#" class="tab-button border-b-2 border-transparent py-4 px-1 text-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-300" data-tab="patient-form">Patient Form</a>
                        </nav>
                    </div>
                </div>

                <!-- Patients List Tab Content -->
                <div id="patients-list" class="tab-content">
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">All Patients</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Phone</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <!-- Example Patient Row -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">John Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">john.doe@example.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">+1 (555) 123-4567</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Patient Form Tab Content -->
                <div id="patient-form" class="tab-content hidden">
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Add New Patient</h2>
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                                    <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white" placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white" placeholder="john.doe@example.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white" placeholder="+1 (XXX) XXX-XXXX">
                                </div>
                                <div>
                                    <label for="dob" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white">
                                </div>
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                                    <input type="text" name="address" id="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white" placeholder="123 Main St">
                                </div>
                                <div>
                                    <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gender</label>
                                    <select name="gender" id="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                    Add Patient
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.dataset.tab;

                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                        btn.classList.add('border-transparent', 'text-gray-500', 'dark:text-gray-400', 'hover:border-gray-300', 'hover:text-gray-700', 'dark:hover:text-gray-300');
                    });

                    this.classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                    this.classList.remove('border-transparent', 'text-gray-500', 'dark:text-gray-400', 'hover:border-gray-300', 'hover:text-gray-700', 'dark:hover:text-gray-300');

                    tabContents.forEach(content => {
                        if (content.id === targetTab) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                });
            });

            // Optionally, activate the first tab by default
            if (tabButtons.length > 0) {
                tabButtons[0].click();
            }
        });
    </script>
@endsection