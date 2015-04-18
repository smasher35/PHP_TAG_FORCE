<?php

spl_autoload_register();

//use Ainet\Controllers\UserController;

/*$controller = new UserController;
$users = $controller->listUsers();
$title = "List users";*/

require('Views/header.view.php');
require('Views/main.view.php');
require('Views/footer.view.php');
