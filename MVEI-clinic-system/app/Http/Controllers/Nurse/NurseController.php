<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NurseController extends Controller
{
    public function dashboard()
    {
        return view('nurse.dashboard');
    }
    
    public function patientCare()
    {
        // Nurse patient care logic
    }
}
