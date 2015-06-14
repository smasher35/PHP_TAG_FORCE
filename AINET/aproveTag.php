<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\ProjectTagsController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$projectTagController = new ProjectTagsController();
$accountController = new AccountController();
$currentUserID = $accountController->getUserId($_SESSION['email']);

$tagId = $_GET['tag_id'];

$projectTagController->setAprovedTags($tagId, $currentUserID);

