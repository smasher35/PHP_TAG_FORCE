<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 18/04/2015
 * Time: 15:47
 */

spl_autoload_register();


use Ainet\controllers\UserController;

/*
 * $controller = new UserController;
 * $users = $controller->listUsers();
*/

$title = "PHP TAG FORCE - Home";

require('Views/headerFooter/header.view.php');
require('Views/main.view.php');
require('Views/headerFooter/footer.view.php');