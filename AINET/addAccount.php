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
use AINET\Support\urlHelper;



//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$authController = new AuthenticationController();
$accountController = new AccountController();
$role = $accountController->getRole($_SESSION['email']);

if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['retypePass'] != "" && $_POST['institution'] != "" && $_POST['position'] != "" && $_POST['role'] != "" && $_POST['statusRadio']  != "" ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypePass = $_POST['retypePass'];
    $institution = $_POST['institution'];
    $position = $_POST['position'];
    $role = $_POST['role'];
    $status = $_POST['statusRadio'];
    $photoUrl = $_POST['photoUrl'];
    $inputUrl = $_POST['inputUrl'];
    $altEmail = $_POST['altEmail'];








    if ($role == 4) {
        if ($password == $retypePass) {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $role = intval($role);
            $status = intval($status);
            $account = compact("name", "email", "password", "institution", "position", "role", "status", "photoUrl", "inputUrl", "altEmail");
            $accountController->addAccount($account);
        } else {
            $redirect = urlHelper::urlBuilder("addAccountPage.php?result_code=-2");
            header($redirect);
        }
    }

}
else {
        $redirect = urlHelper::urlBuilder("addAccountPage.php?result_code=-1");
        header($redirect);
}
