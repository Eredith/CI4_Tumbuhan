<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersTable extends Migration
{
    public function up()
    {
        // Table structure for table 'users'
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'email'      => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'password'   => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'created_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
                'default'    => null,
            ],
            'is_admin'   => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'null'       => false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users', true);

        // Dumping data for table 'users'
        $data = [
            [
                'id'         => 1,
                'name'       => 'aero',
                'email'      => 'aerotimorence@gmail.com',
                'password'   => 'test',
                'created_at' => null,
                'is_admin'   => 0,
            ],
            // ... Add other data entries here
        ];

        $this->db->table('users')->insertBatch($data);
    }

    public function down()
    {
        // Drop the 'users' table if needed
        $this->forge->dropTable('users', true);
    }
}
