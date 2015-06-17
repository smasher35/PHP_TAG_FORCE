<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 17-06-2015
 * Time: 11:55
 */

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;
use Ainet\Support\HtmlHelper;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$accountController = new AccountController();
$htmlHelper= new HtmlHelper();
$authenticated = true;



$accountId = $_POST['account_id'];

$password = $_POST['password'];
$retypePassword = $_POST['retypePass'];

if ($password == $retypePassword) {
    $password = password_hash($password, PASSWORD_BCRYPT);
    $accountController->changePassword($password, $accountId);
}
else {
    echo "Passwords don't match";
    //TODO GERAR ERROS
}



