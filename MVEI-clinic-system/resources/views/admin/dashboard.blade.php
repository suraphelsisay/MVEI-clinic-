<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.admin')

@section('title', 'Admin Dashboard - MVEI Clinic System')

@section('page_title', 'Dashboard')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Dashboard</h1>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
            <i class="fas fa-plus mr-2"></i> Add New Patient
        </button>
    </div>

    <!-- KPI Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Total Patients</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">1,234</p>
            </div>
            <i class="fas fa-users text-4xl text-blue-500"></i>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Appointments Today</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">45</p>
            </div>
            <i class="fas fa-calendar-check text-4xl text-green-500"></i>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Doctors Online</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">12</p>
            </div>
            <i class="fas fa-user-md text-4xl text-purple-500"></i>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Revenue (Month)</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$12,345</p>
            </div>
            <i class="fas fa-dollar-sign text-4xl text-yellow-500"></i>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Patient Registrations</h2>
            <canvas id="patientChart"></canvas>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Appointments Overview</h2>
            <canvas id="appointmentChart"></canvas>
        </div>
    </div>

    <!-- Recent Activity & Recent Patients -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Recent Activity</h2>
            <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-800 dark:text-gray-200">New patient registered: John Doe</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-800 dark:text-gray-200">Appointment scheduled for Jane Smith</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">1 day ago</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-800 dark:text-gray-200">Doctor Alice updated profile</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">3 days ago</span>
                </li>
            </ul>
        </div>
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Recent Patients</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                    <thead class="bg-gray-50 dark:bg-gray-600">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Age</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Last Visit</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">34</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-26</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-25</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Peter Jones</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">28</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Patient Registrations Chart
        const patientCtx = document.getElementById('patientChart').getContext('2d');
        new Chart(patientCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'New Patients',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Appointments Overview Chart
        const appointmentCtx = document.getElementById('appointmentChart').getContext('2d');
        new Chart(appointmentCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Appointments',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush