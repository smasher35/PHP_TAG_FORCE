<?php
/**
 * Created by PhpStorm.
 * User: Paulo Penicheiro - 2130628
 * Date: 04/05/2015
 * Time: 10:48
 */

spl_autoload_register();

use Ainet\controllers\UserController;
use Ainet\Controllers\AuthenticationController;

/*
//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}

$authenticated = true;

$controller = new UserController();
list($user,$errors)=$controller->addUser();
*/
$title = "Add Account";


require('Views\accounts\addAccount.view.php');
