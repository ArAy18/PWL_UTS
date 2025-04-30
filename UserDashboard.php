<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserDashboard extends Controller
{
    public function __construct()
    {
        // Proteksi hanya user yang boleh akses
        if (!session()->has('role') || session()->get('role') !== 'user') {
            return redirect()->to('/login')->send();
            exit;
        }
    }

    public function index()
    {
        return view('user_dashboard');
    }
}
