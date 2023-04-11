<?php

namespace App\Controllers;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        session_start();
        return require $_SERVER['DOCUMENT_ROOT'] . "/app/Views/{$view}.php";
    }

    public function redirect($path)
    {
        header("Location: http://localhost:8000/{$path}");
    }
}