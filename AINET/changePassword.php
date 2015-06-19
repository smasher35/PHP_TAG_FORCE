<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 17-06-2015
 * Time: 11:55
 */

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use Ainet\Support\HtmlHelper;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$accountController = new AccountController();
$htmlHelper = new HtmlHelper();
$authenticated = true;


$accountId = $_POST['account_id'];

$password = $_POST['password'];
$retypePassword = $_POST['retypePass'];


$accountController->changePassword($password, $retypePassword, $accountId);




