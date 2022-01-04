<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        echo view('layout/header', $data);
        echo view('index');
    }
}
