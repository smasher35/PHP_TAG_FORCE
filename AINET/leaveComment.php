<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 09-06-2015
 * Time: 23:47
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\CommentController;
use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;

$commentController = new CommentController();
$accountController = new AccountController();
$authenticationController = new AuthenticationController();



$projectId = $_POST['project_id'];

$comment = $_POST['comment'];

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
else {
    $name = null;
}
/*if ($authenticationController->isAuthenticated()) {
    $currentUser = $authenticationController->getAuthenticatedUser();
    $curretUserId = $currentUser->id;
}
else {
    $currentUserId = null;
} */

$currentUserId = null;
$commentController->leaveComment($projectId, $name, $comment, $currentUserId);