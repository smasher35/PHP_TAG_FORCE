<?php
/**
 * Created by PhpStorm.
 * User: Paulo Penicheiro - 2130628
 * Date: 04/05/2015
 * Time: 10:48
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\InstitutionController;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$accountController = new AccountController();
$institutionController = new InstitutionController();
//list($user,$errors)=$accountController->addUser();
$institutions = $institutionController->listInstitutions();

$account = $accountController->getUserById($_GET['account_id']);

$success = [];
if (isset($_GET['result_code'])) {
    if ($_GET['result_code'] == 0) {
        $success = ['changePassSuccess' => 'Password successfully changed!'];
    } else {
        if ($_GET['result_code'] == -1) {
            $errors = ['requiredFields' => 'Please fill all required fields(*)'];
        }
    }

}

$title = "Edit Account";


require('MVC/Views\accounts\editAccount.view.php');
