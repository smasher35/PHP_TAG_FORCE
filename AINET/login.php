<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 20/04/2015
 * Time: 17:27
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AuthenticationController;

$controller = new AuthenticationController();

if($controller->isAuthenticated()) {
	$controller->redirectToHome();
}

$user = $controller->account;
$errors = $controller->errors;

$title = "PHP TAG FORCE - Login";
$authenticated = null;

require('MVC/Views/login.view.php');