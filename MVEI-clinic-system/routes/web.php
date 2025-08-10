<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home'); // Cambiado de 'welcome' a 'home' para su nueva página de inicio
});

Route::middleware(['auth'])->group(function () {
    Route::get('/patient/dashboard', [App\Http\Controllers\PatientController::class, 'dashboard'])->name('patient.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [App\Http\Controllers\Admin\AdminController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/patients', [App\Http\Controllers\Admin\AdminController::class, 'patients'])->name('admin.patients');
    Route::get('/admin/doctors', [App\Http\Controllers\Admin\AdminController::class, 'doctors'])->name('admin.doctors');
    Route::get('/admin/doctors/create', [App\Http\Controllers\Admin\AdminController::class, 'createDoctor'])->name('admin.doctors.create');
    Route::post('/admin/doctors', [App\Http\Controllers\Admin\AdminController::class, 'storeDoctor'])->name('admin.doctors.store');
    Route::get('/admin/appointments', [App\Http\Controllers\Admin\AdminController::class, 'appointments'])->name('admin.appointments');
    Route::get('/admin/billing', [App\Http\Controllers\Admin\AdminController::class, 'billing'])->name('admin.billing');
    Route::get('/admin/settings', [App\Http\Controllers\Admin\AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/admin/reports', [App\Http\Controllers\Admin\AdminController::class, 'reports'])->name('admin.reports');
    Route::get('/admin/reports/export/csv', [App\Http\Controllers\Admin\AdminController::class, 'exportReportsCsv'])->name('admin.reports.export.csv');
    Route::get('/admin/reports/export/pdf', [App\Http\Controllers\Admin\AdminController::class, 'exportReportsPdf'])->name('admin.reports.export.pdf');
});

Route::middleware(['auth', 'doctor'])->group(function () {
    Route::get('/doctor/dashboard', [App\Http\Controllers\Doctor\DoctorController::class, 'dashboard'])->name('doctor.dashboard');
});

Route::middleware(['auth', 'nurse'])->group(function () {
    Route::get('/nurse/dashboard', [App\Http\Controllers\Nurse\NurseController::class, 'dashboard'])->name('nurse.dashboard');
});

Route::middleware(['auth', 'finance'])->group(function () {
    Route::get('/finance/dashboard', [App\Http\Controllers\Finance\FinanceController::class, 'dashboard'])->name('finance.dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ... cualquier otra ruta existente que desee mantener ...