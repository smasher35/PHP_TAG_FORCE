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
use AINET\MVC\Controllers\TagsController;



//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}

$authenticated = true;

$tagController = new TagsController();
$accountController = new AccountController();
$institutionController = new InstitutionController();
$projectController = new ProjectController();
//list($user,$errors)=$accountController->addUser();
$allTags = $tagController->listAll();

$title = "Add Account";


require('MVC\Views\Projects\addProject.view.php');
