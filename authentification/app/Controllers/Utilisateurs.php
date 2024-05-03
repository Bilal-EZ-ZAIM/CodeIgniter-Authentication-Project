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
        try {
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

            // Validation des données
            if (!$this->validate($rules, $errors)) {
                return redirect()->back()
                    ->with('errors', $this->validator->getErrors())
                    ->withInput();
            }

            // Récupération des données du formulaire
            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            // Insertion des données dans la base de données
            $this->modale->insert($data);

            // Redirection vers la page de connexion après l'enregistrement réussi
            return redirect()->to('/login');
        } catch (\Exception $e) {
            // Gestion des erreurs
            return redirect()->back()
                ->with('error', 'Une erreur s\'est produite lors de l\'enregistrement. Veuillez réessayer plus tard.');
        }
    }





    public function getLogin()
    {
        return view('Auth/login');
    }


    public function login()
    {
        try {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', $this->validator->getErrors());
            }

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->modale->where('email', $email)->first();

            if ($user && password_verify($password, $user->password)) {
                return redirect()->to('/');
            } else {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Adresse e-mail ou mot de passe incorrect.');
            }
        } catch (\Exception $e) {
            // Gérer l'exception ici
            return redirect()->back()
                ->withInput()
                ->with('error', 'Une erreur s\'est produite lors de la connexion.');
        }
    }
}
