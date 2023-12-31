<?php

namespace App\Controllers;

use App\Models\TumbuhanModel;

class Dashboard extends BaseController
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

        echo view('PageHeader');
        echo view('dashboard_view', $data);
        echo view('footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('dashboard');
    }
}
