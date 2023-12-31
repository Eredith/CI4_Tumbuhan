<?php

namespace App\Controllers;

use App\Models\TumbuhanModel;

class AdminPage extends BaseController
{
    protected $tumbuhanModel;

    public function __construct()
    {
        $this->tumbuhanModel = new TumbuhanModel();
    }

    public function index()
    {
        $getdata = $this->tumbuhanModel->getdata();

        $data = array(
            'dataTumbuhan' => $getdata,
        );
        echo view('admin_header');
        echo view('admin_view', $data);
        echo view('footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('dashboard');
    }
}
