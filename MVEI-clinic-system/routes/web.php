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