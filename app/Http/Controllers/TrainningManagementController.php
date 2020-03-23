<?php
namespace App\Http\Controllers;

use PHPUnit\Framework\Constraint\Count;

class TrainningManagementController extends Controller
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
        return view('training_management.dashboard');
    }
}
