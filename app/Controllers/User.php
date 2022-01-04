<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct() {
		$this->userModel = model('App\Models\User');
        // $this->db = \Config\Database::connect();
	}

    public function index()
    {
        $data['title'] = 'Login';  
        echo view('user/auth/login', $data);
    }

    public function home()
    {
        $data['title'] = 'Home';
        $data['current'] = 'home';  
        //Get user session
        echo 'Got here';
        echo $this->session->get('user');
        // echo view('user/home',$data);
        // echo view('user/welcome',$data);
    }

    public function login(){
        if($this->request->getPost()){
            $val = $this->request->getPost();
            $res = $this->userModel->login($val);

            if($res){
                $ses = $this->userModel->where('email', $val['email'])->find();
                $this->session->set('user',$ses);
                echo 'success';
            }
            else{
                echo 'Invalid email or password';
            }
        }
    }

    public function register()
    {
        $data['title'] = 'Register';
        if($this->request->getPost()){
            $val = $this->request->getPost();

            $res = $this->userModel->save($val);
            if($res === false)
            {
                return view('user/auth/register', ['errors' => $this->userModel->errors()]);
            }
            else{
                return 'Successfully register';
            }
        }
        
        echo view('user/auth/register',$data);
    }
}