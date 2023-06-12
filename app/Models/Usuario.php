<?php

namespace App\Models;

class Usuario extends Model
{
    public function autenticar($email, $senha): bool
    {
        $senha = $this->criptografar($senha);
        $sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";
        $resultado = $this->query($sql);

        if (! empty($resultado) && count($resultado) > 0) {
            return true;
        }
//teste
        return false;
    }

    public function listar()
    {
        $sql = "SELECT * FROM usuarios";
        return $this->query($sql);
    }

    public function criar($nome, $email, $idade, $senha)
    {
        $senha = $this->criptografar($senha);
        $sql = "INSERT INTO usuarios (nome, email, idade, senha) VALUES ('{$nome}', '{$email}', {$idade}, '{$senha}')";
        $this->query($sql);
    }

    private function criptografar($texto): string 
    {
        return md5(sha1($texto));
    }
}