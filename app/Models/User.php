<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'surname', 'firstname', 'othername', 'username', 'email', 'password'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'surname' => 'required',
        'firstname' => 'required',
        'othername' => 'required',
        'username' => 'required|min_length[5]',
        'email' => 'required|valid_email|is_unique[user.email]',
        'password'  => 'required|min_length[8]'
    ];
    protected $validationMessages   = [
        'surname' => [
            'required' => 'Surname is required'
        ],
        'firstname' => [
            'required' => 'Firstname is required'
        ],
        'othername' => [
            'required' => 'Othername is required'
        ],
        'username' => [
            'required' => 'Username is required',
            'min_length' => 'Username is too short'
        ],
        'email' => [
            'required' => 'You must provide an email',
            'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        ],
        'password' => [
            'required' => 'Please provide a password',
            'min_length' => 'Password too short... minimum of 8 characters are required'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) return $data;

        //Hash Password
        $option = array('cost', 12);
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT, $option);

        return $data;
    }


    public function login($data)
    {
		$user = model('App\Models\User');
        //Find user with the parameters passed
        $res = $user->where('email', $data['email'])->findAll();

        //Check if something is found
        if(sizeof($res) > 0)
        {
            //Verify Password
            $verify = password_verify($data['password'], $res[0]->password);
            if($verify){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}
