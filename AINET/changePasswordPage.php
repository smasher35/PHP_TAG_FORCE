<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 17-06-2015
 * Time: 11:27
 */
require 'bootstrap.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$accountController = new AccountController();

$accountId = $_GET['account_id'];
$account = $accountController->getUserById($accountId);
$errorsPass = false;

if (isset($_GET['code'])) {
    if ($_GET['code'] == -1) {
        $errorsPass = ['missMatchPassword' => 'Passwords don\'t match'];
    }

}

$title = "Change Password";

require('MVC/Views/accounts/changePassword.view.php');