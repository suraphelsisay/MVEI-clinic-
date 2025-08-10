<!DOCTYPE html>
@extends('layouts.admin')

@section('title', 'Doctors Management')

@section('content')
<main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Doctors</h1>
                    <a href="{{ route('admin.doctors.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <i class="fas fa-plus mr-2"></i> Add New Doctor
                    </a>
                </div>

                <!-- Doctors List -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">All Doctors</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-600">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Specialty</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                <!-- Example Doctor Row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Dr. Jane Smith</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">jane.smith@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Cardiologist</td>
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
            </main>
        </div>
    </div>
</main>
@endsection