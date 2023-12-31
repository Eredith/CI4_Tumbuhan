<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserLoginModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login_view');
    }

    public function indexadmin()
    {
        helper(['form']);
        echo view('admin_login');
    }

    public function loginAdmin()
    {
        $session = session();
        $request = \Config\Services::request();
        $model = new UserLoginModel();
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                // Check if the user is an admin
                if ($data['is_admin'] == 1) {
                    $ses_data = [
                        'id'       => $data['id'],
                        'name'     => $data['name'],
                        'email'    => $data['email'],
                        'is_admin' => true,  // Add an indicator for admin
                        'logged_in' => true
                    ];

                    $session->set($ses_data);
                    return redirect()->to('/admin/dashboard');
                } else {
                    // Regular user login logic
                    $ses_data = [
                        'id'       => $data['id'],
                        'name'     => $data['name'],
                        'email'    => $data['email'],
                        'is_admin' => false,
                        'logged_in' => true
                    ];

                    $session->set($ses_data);
                    $session->setFlashdata('msg', 'Ter-Login Sebagai User');
                    return redirect()->to('/dashboard');
                }
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Silakan Masukkan Email dan Password yang Benar');
            return redirect()->to('/login');
        }
    }


    public function auth()
    {
        $session = session();
        $request = \Config\Services::request();
        $model = new UserLoginModel();
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Silakan Masukkan Email dan Password yang Benar');
            return redirect()->to('/login');
        }
    }
}
