<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 08-06-2015
 * Time: 17:13
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$authController = new AuthenticationController();
$accountController = new AccountController();
$role = $accountController->getRole($_SESSION['email']);

if ($role == 4){

    $accountController->addAccount();

}

