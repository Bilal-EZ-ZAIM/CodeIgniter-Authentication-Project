<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Utilisateurs extends BaseController
{
    public function getRegister()
    {
        return view('Auth/register');
    }

    public function getLogin()
    {
        return view('Auth/login');
    }
}
