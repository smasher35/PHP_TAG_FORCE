<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;

$commentController = new CommentController();
$accountController = new AccountController();
$currentUserID = $accountController->getUserId($_SESSION['email']);

$commentId = $_GET['comment_id'];

$commentController->setAprovedComments($commentId, $currentUserID);

