<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;


$commentController = new CommentController();


$commentId = $_POST['comment_id'];
$refusal_msg = $_POST['refusalMessage'];


$commentController->setRejectedComment($commentId,$refusal_msg);

