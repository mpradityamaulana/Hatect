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
        $user = auth()->guard('web')->user(); // Mengambil data dari guard default (users)
        $ahli = auth()->guard('ahli')->user(); // Mengambil data dari guard ahli

        // Kirimkan data yang diperlukan ke view dashboard
        return view('dashboard', compact('user', 'ahli'));
    }
}
