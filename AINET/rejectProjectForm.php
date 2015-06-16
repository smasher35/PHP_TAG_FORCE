<?php

require 'bootstrap.php';


use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\ProjectController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;


$projectId = $_GET['project_id'];
$projectController = new ProjectController();

require 'MVC/Views/Dashboards/rejectProject.View.php';