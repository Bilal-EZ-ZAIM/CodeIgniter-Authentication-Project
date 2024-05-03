<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\ResponseInterface;

class Utilisateurs extends BaseController
{

    private $modale;

    public function __construct()
    {
        $this->modale =  new UserModel();
    }


    public function getRegister()
    {
        return view('Auth/register');
    }

    public function register()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]'
        ];

        $errors = [
            'email' => [
                'is_unique' => 'Cet e-mail est déjà pris.'
            ]
        ];


        if (!$this->validate($rules, $errors)) {

            return redirect()->back()
                ->with('errors', $this->validator->getErrors())
                ->withInput();
        }


        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->modale->insert($data);

        return redirect()->redirect('/login');
    }





    public function getLogin()
    {
        return view('Auth/login');
    }

}
