<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 28/04/2015
 * Time: 14:40
 */

spl_autoload_register();

use Ainet\controllers;

/*
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}else {
	$title = "PHP TAG FORCE - DashBoard";
	//TODO: verificar tipo de utilizador e enviar para o authenticationcontroller
}


*/

require('Dasboards\adminDash.view.php');

