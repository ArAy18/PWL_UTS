<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminDashboard extends Controller
{
    public function __construct()
    {
        // Proteksi hanya admin yang boleh akses
        if (!session()->has('role') || session()->get('role') !== 'admin') {
            return redirect()->to('/login')->send();
            exit;
        }
    }

    public function index()
    {
        return view('admin_dashboard');
    }
}
