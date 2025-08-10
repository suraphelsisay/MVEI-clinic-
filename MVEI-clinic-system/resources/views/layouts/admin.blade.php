<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md flex flex-col">
            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex items-center">
                <!-- <img src="https://via.placeholder.com/40" alt="Clinic Logo" class="h-10 w-10 mr-3 rounded-full"> -->
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">MVEI Clinic</h1>
            </div>
            <nav class="flex-1 p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-home mr-3"></i>Dashboard</a>
                <a href="{{ route('admin.patients') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-users mr-3"></i>Patients</a>
                <a href="{{ route('admin.doctors') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-user-md mr-3"></i>Doctors</a>
                <a href="{{ route('admin.appointments') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-calendar-alt mr-3"></i>Appointments</a>
                <a href="{{ route('admin.billing') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-file-invoice-dollar mr-3"></i>Billing</a>
                <a href="{{ route('admin.reports') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-chart-bar mr-3"></i>Reports</a>
                <a href="{{ route('admin.settings') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-cogs mr-3"></i>Settings</a>
            </nav>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full text-left"><i class="fas fa-sign-out-alt mr-3"></i>Logout</button>
                </form>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="w-full bg-white dark:bg-gray-800 shadow-md p-6 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">@yield('page_title', 'Admin Panel')</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"><i class="fas fa-bell"></i></button>
                    <div class="relative">
                        <!-- <img src="https://via.placeholder.com/32" alt="Admin Avatar" class="rounded-full w-8 h-8"> -->
                        <div class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-800 dark:text-white">Admin Name</span>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>