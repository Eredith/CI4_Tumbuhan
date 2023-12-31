<?php

namespace App\Models;

use CodeIgniter\Model;

class TumbuhanInsertModel extends Model
{
    protected $table = 'tumbuhan';

    // Define the fields that are allowed to be mass-assigned
    protected $allowedFields = ['nama_tumbuhan', 'nama_latin', 'jumlah_tumbuhan', 'foto_tumbuhan'];

    public function insertData($data)
    {
        // Insert the data into the 'tumbuhan' table
        return $this->insert($data);
    }
}
