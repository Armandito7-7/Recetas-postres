<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('portal/menu');
        echo view('index');
       
    }

    public function login()
    {
        echo view('portal/menu');
        echo view('panel/login/login');
       
    }

    public function about()
    {
        echo view('portal/menu');
        echo view('portal/about');
       
    }
}

