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
$projectId = $_GET['project_id'];
$actualProject = $projectController->listProjectByid($projectId);
$allTags = $tagController->listAll();
$errors = false;

$title = "Edit Project";

if (isset($_GET['result_code'])) {
    if ($_GET['result_code'] == -1) {
        $errors = ['requiredFields' => 'Please fill all required fields(*)'];
    }
}

require('MVC\Views\Projects\editProject.view.php');
