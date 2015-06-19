<?php

require 'bootstrap.php';


use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;


//valida autenticação no site
$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;


$commentController = new CommentController();


$commentId = $_GET['comment_id'];

require 'MVC/Views/Dashboards/rejectComment.View.php';