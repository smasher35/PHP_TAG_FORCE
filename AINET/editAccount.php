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

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['institution']) && isset($_POST['position']) && isset($_POST['role']) && isset($_POST['statusRadio'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution = $_POST['institution'];
    $position = $_POST['position'];
    $role = $_POST['role'];
    $accountId = $_POST['account_id'];
    $status = $_POST['statusRadio'];

    $role = intval($role);
    $status = intval($status);


//TODO retornar os erros

    if (isset($_POST['photoUrl'])) {
        $photoUrl = $_POST['photoUrl'];
    }
    if (isset($_POST['inputUrl'])) {
        $inputUrl = $_POST['inputUrl'];

    }
    if (isset($_POST['altEmail'])) {
        $altEmail = $_POST['altEmail'];
    }

    $account = compact("accountId", "name", "email", "institution", "position", "role", "status", "photoUrl", "inputUrl", "altEmail");
    $accountController->editAccount($account);



}