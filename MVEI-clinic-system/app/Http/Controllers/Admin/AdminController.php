<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:patient,doctor,admin,nurse,finance',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function patients()
    {
        return view('admin.patients');
    }

    public function doctors()
    {
        return view('admin.doctors');
    }

    public function createDoctor()
    {
        return view('admin.doctors.create');
    }

    public function storeDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:255',
            'specialty' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'), // Default password for new doctors
            'role' => 'doctor',
            'phone' => $request->phone,
            'specialty' => $request->specialty,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.doctors')->with('success', 'Doctor created successfully!');
    }

    public function appointments()
    {
        return view('admin.appointments');
    }

    public function billing()
    {
        return view('admin.billing');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function reports(Request $request)
    {
        // For now, just return the view. Logic for filtering data will be added later.
        return view('admin.reports');
    }

    public function exportReportsCsv(Request $request)
    {
        // Logic to export data as CSV based on date_range
        $dateRange = $request->input('date_range');
        // Example: Fetch data based on dateRange and return a CSV response
        return response()->streamDownload(function () use ($dateRange) {
            echo "Date Range: " . $dateRange . "\n";
            echo "Report data will be here in CSV format.";
        }, 'reports.csv', ['Content-Type' => 'text/csv']);
    }

    public function exportReportsPdf(Request $request)
    {
        // Logic to export data as PDF based on date_range
        $dateRange = $request->input('date_range');
        // Example: Generate a simple PDF for now. Requires a PDF library like Dompdf or Snappy.
        // For a real application, you'd use a library to generate a proper PDF.
        return response("PDF Report for Date Range: " . $dateRange, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="reports.pdf"');
    }
}