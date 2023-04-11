<?php 

require("../vendor/autoload.php");

use App\Controllers\LoginController;

(new LoginController)->store($_POST);