<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new Usuario;
    }

    public function index()
    {
        $usuarios = $this->usuarioModel->listar();
        return $this->view('UsuarioLista', [
            'usuarios' => $usuarios
        ]);
    }

    public function show($id)
    {
      /**
       * CRIAR UMA NOVA TELA PARA MOSTRAR UM USUARIO
       * QUANDO CLICAR NUM BOTÃO NA LISTAGEM DE USUARIOS
       * VAI ENTRAR NESSA TELA, COM TODOS OS INPUTS DA TELA DE CRIAR COM READNOLY E SEM UM FORMULARIO
       */
    }

    public function create()
    {
        return $this->view('UsuarioCriar');
    }

    public function store(array $request)
    {
        $this->usuarioModel->criar($request['nome'], $request['email'], $request['idade'], $request['senha']);
        $this->redirect('usuarios');
    }

    public function edit()
    {
        /**
       * CRIAR UMA NOVA TELA PARA EDITAR UM USUARIO
       * QUANDO CLICAR NUM BOTÃO NA LISTAGEM DE USUARIOS
       * VAI ENTRAR NESSA TELA, COM TODOS OS INPUTS DA TELA DE CRIAR HABILITADOS PARA EDIÇÃO E COM FORMULARIO PARA ENVIAR OS DADOS
       */
    }

    public function update(array $request)
    {
    /**
       * CRIAR UMA NOVA ROTA PARA ATUALIZAR UM USUARIO
       * QUANDO CLICAR NO BOTÃO DO FORMULARIO EDITR
       * VAI ACESSAR A ROTA PARA ATUALIZAR O USUARIO
       */    
      }

    public function destroy(array $request)
    {
  /**
       * CRIAR UMA NOVA ROTA PARA EXCLUIR UM USUARIO
       * QUANDO CLICAR NO BOTÃO DO FORMULARIO EDITR
       * VAI ACESSAR A ROTA PARA ATUALIZAR O USUARIO
       */        }
}