<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Kirimkan data yang diperlukan ke view dashboard
        return view('dashboard', [
            'user' => auth()->user(),]);
    }
}
