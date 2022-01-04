<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $data = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'surname' => [
                'type' => 'varchar',
                'constraint' => '100',
                'null' => false
            ],
            'firstname' => [
                'type' => 'varchar',
                'constraint' => '100',
                'null' => false
            ],
            'othername' => [
                'type' => 'varchar',
                'constraint' => '100',
                'null' => false
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '100',
                'unique', true,
                'null' => false
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => '60',
                'null' => false
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
