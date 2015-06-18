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
use AINET\MVC\Controllers\ProjectController;



//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}

$authenticated = true;

$accountController = new AccountController();
$institutionController = new InstitutionController();
$projectController = new ProjectController();
//list($user,$errors)=$accountController->addUser();
$institutions = $institutionController->listInstitutions();

$title = "Add Account";


require('MVC\Views\Projects\addProject.view.php');
