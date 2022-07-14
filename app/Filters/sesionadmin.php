<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class sesionadmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session('rol') != 1 && session('rol') !=2){
            return redirect()->to(base_url('/'));
        }
        if(!isset($_SESSION['id'])){
            return redirect()->to(base_url('/'));

        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}