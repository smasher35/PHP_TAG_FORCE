<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 27/04/2015
 * Time: 15:47
 */

spl_autoload_register();


use Ainet\controllers;

/*$controller = new UserController;
$accounts = $controller->listUsers();
$title = "List accounts";*/

$title = "PHP TAG FORCE - Accounts Browsing";

require('Views/accountsBrowsing.view.php');
