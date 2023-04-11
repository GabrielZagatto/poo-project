<?php

namespace App\Controllers;

use App\Models\Usuario;

class LoginController extends Controller
{
    public function index()
    {
        return $this->view('Login', [
            'title' => 'Login',
            'name' => 'John Doe'
        ]);
    }

    public function store(array $request)
    {
        $usuario = new Usuario();
        if ($usuario->autenticar($request['email'], $request['senha'])) {
            $this->redirect('usuarios');
            return;
        } 

        session_start();
        $_SESSION['error'] = 'Usuário ou senha inválidos';
        
        $this->redirect('/');
    }

    //index
    //store
    //show
    //update
    //destroy
}