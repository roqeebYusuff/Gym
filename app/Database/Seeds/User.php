<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
                'surname' => 'Yusuff',
                'firstname' => 'Roqeeb',
                'othername' => 'Oluwatoyin',
                'username' => 'user',
                'email'    => 'roqeeb@gmail.com',
                'password' => '123456'
        ];

        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
