<?php
namespace App\Http\Controllers;

use PHPUnit\Framework\Constraint\Count;

class PerformanceManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('performance_management.dashboard');
    }
}
