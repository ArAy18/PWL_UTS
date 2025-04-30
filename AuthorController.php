<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthorController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'admin' && $password === 'admin123') {
            session()->set('role', 'admin');
            session()->set('username', $username);
            return redirect()->to('/admin');
        } elseif ($username === 'user' && $password === 'user123') {
            session()->set('role', 'user');
            session()->set('username', $username);
            return redirect()->to('/user');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
