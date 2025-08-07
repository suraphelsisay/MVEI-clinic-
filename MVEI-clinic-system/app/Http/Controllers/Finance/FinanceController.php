<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function dashboard()
    {
        return view('finance.dashboard');
    }
    
    public function billing()
    {
        // Finance billing logic
    }
}