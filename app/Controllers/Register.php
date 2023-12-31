<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        // Menampilkan view register
        return view('register_view');
    }

    public function save()
    {
        $session = session();
        // Mendapatkan data dari form
        $request = \Config\Services::request();
        $username = $request->getPost('username');
        $email = $request->getPost('email');
        $password = $request->getPost('password');

        // Mengenkripsi password menggunakan password_hash()
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Menyimpan data ke tabel "users" dalam database
        $userModel = new UserModel();
        $userModel->save([
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword,
        ]);

        // Redirect ke halaman login atau halaman lainnya
        $session->setFlashdata('msg', 'Register Berhasil, Silahkan Login');
        return redirect()->to('/login');
    }
}
