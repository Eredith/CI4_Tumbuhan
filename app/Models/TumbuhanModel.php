<?php

namespace App\Models;

use CodeIgniter\Model;

class TumbuhanModel extends Model
{
    protected $table = 'tumbuhan'; // Change to your actual table name
    protected $primaryKey = 'id'; // Change to your actual primary key column name
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_tumbuhan', 'nama_latin', 'jumlah_tumbuhan', 'foto_tumbuhan'];

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tumbuhan");
        return $query->getResult();
    }

    public function deleteTumbuhan($id)
    {
        $this->where('id', $id);
        $this->delete();
    }
}
