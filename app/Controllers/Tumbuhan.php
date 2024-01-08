<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TumbuhanInsertModel;
use App\Models\TumbuhanModel;

class Tumbuhan extends Controller
{
    protected $tumbuhanModel;
    protected $tumbuhan;

    public function __construct()
    {
        $this->tumbuhanModel = new TumbuhanInsertModel();
        $this->tumbuhan = new TumbuhanModel();
    }

    public function index()
    {
        $data_error = [
            'validation' => \Config\Services::validation()
        ];
        echo view('PageHeader');
        echo view('tumbuhan_view', $data_error);
        echo view('footer');
    }

    public function insertData()
    {

        $file_foto = $this->request->getFile('foto_tumbuhan');

        $file_foto->move('uploads');

        $nama_foto = $file_foto->getName();

        // Assuming you are getting data from a form
        $data = [
            'nama_tumbuhan'   => $this->request->getPost('nama_tumbuhan'),
            'nama_latin'      => $this->request->getPost('nama_latin'),
            'jumlah_tumbuhan' => $this->request->getPost('jumlah_tumbuhan'),
            'foto_tumbuhan'   => $nama_foto
        ];

        if (!$this->validate([
            'nama_tumbuhan' => [
                'rules' => 'required|is_unique[tumbuhan.nama_tumbuhan]',
                'errors' => [
                    'required' => 'Nama tumbuhan harus diisi',
                    'is_unique' => 'Nama tumbuhan sudah terdaftar'
                ],
            ],
            'nama_latin' => [
                'rules' => 'required|is_unique[tumbuhan.nama_latin]',
                'errors' => [
                    'required' => 'Nama latin harus diisi',
                    'is_unique' => 'Nama latin sudah terdaftar'
                ],
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Check if the user is an admin based on the session variable
        if (session()->get('is_admin')) {
            $this->tumbuhanModel->insert($data);
            session()->setFlashdata('pesanTumbuhan', 'Data Tumbuhan berhasil ditambahkan');
            return redirect()->to('/admin/dashboard');
        } else {
            // Redirect to the regular user dashboard
            $this->tumbuhanModel->insert($data);
            session()->setFlashdata('pesanTumbuhan', 'Data Tumbuhan berhasil ditambahkan');
            return redirect()->to('/dashboard');
        }
    }

    public function deleteTumbuhan($id)
    {
        // Call the delete function in the model
        $this->tumbuhan->deleteTumbuhan($id);

        // Redirect or do something after deletion
        return redirect()->to('/admin/dashboard');
    }
}
