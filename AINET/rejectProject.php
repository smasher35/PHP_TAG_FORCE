<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\ProjectController;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$projectController = new ProjectController();


$projectId = $_POST['project_id'];
$refusal_msg = $_POST['refusalMessage'];

$projectController->setRejectedProject($projectId, $refusal_msg);

