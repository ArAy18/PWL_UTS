<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/login');
        }

        return view('admin/admin_dashboard');
    }

    public function user()
    {
        if (session()->get('role') !== 'user') {
            return redirect()->to('/login');
        }

        return view('user/user_dashboard');
    }
}
