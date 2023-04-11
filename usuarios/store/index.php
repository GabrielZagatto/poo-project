<?php 

require("../../vendor/autoload.php");

use App\Controllers\UsuarioController;

(new UsuarioController)->store($_POST);