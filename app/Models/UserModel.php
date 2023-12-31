<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'password', 'created_at'];

    public function insertUser($data)
    {
        // Hash the password before inserting into the database
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Insert the user into the 'users' table
        return $this->insert($data);
    }
}
