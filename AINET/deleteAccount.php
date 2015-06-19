<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$accountController = new AccountController();

$accountId = $_GET['account_id'];

$accountController->setDeletedAccount($accountId);

