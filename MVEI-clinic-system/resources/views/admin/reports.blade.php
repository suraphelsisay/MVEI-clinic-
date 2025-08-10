@extends('layouts.admin')

@section('title', 'Admin Reports')

@section('content')
<main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Reports</h1>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Generate Reports</h2>

        <div class="mb-4">
            <label for="date_range" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date Range</label>
            <input type="text" id="date_range" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Select Date Range">
        </div>

        <div class="flex space-x-4">
            <button id="export_csv" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                <i class="fas fa-file-csv mr-2"></i> Export CSV
            </button>
            <button id="export_pdf" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                <i class="fas fa-file-pdf mr-2"></i> Export PDF
            </button>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Report Preview</h3>
            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-md border border-gray-200 dark:border-gray-600">
                <p class="text-gray-600 dark:text-gray-300">Report content will appear here based on selected date range.</p>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#date_range", {
            mode: "range",
            dateFormat: "Y-m-d",
        });

        document.getElementById('export_csv').addEventListener('click', function() {
            const dateRange = document.getElementById('date_range').value;
            if (dateRange) {
                window.location.href = `/admin/reports/export/csv?date_range=${dateRange}`;
            } else {
                alert('Please select a date range.');
            }
        });

        document.getElementById('export_pdf').addEventListener('click', function() {
            const dateRange = document.getElementById('date_range').value;
            if (dateRange) {
                window.location.href = `/admin/reports/export/pdf?date_range=${dateRange}`;
            } else {
                alert('Please select a date range.');
            }
        });
    });
</script>
@endpush