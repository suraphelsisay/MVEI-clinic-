<!DOCTYPE html>
@extends('layouts.admin')

@section('title', 'Admin Dashboard - Billing')

@section('page_title', 'Billing Management')

@section('content')

        <!-- Main content -->
        <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Billing</h1>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <i class="fas fa-plus mr-2"></i> Generate New Invoice
                    </button>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Recent Transactions</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead>
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Invoice ID</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Patient Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <!-- Example Transaction Row -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">INV001</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">$150.00</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-25</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Paid</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 mr-3">Edit</a>
                                            <a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-600">Print</a>
                                        </td>
                                    </tr>
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection