<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 09-06-2015
 * Time: 23:47
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;

$commentController = new CommentController();
$accountController = new AccountController();
$authenticationController = new AuthenticationController();


$projectId = $_POST['project_id'];

$comment = $_POST['comment'];

if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = null;
}
if ($authenticationController->isAuthenticated()) {
    $currentUserId = $accountController->getUserId($_SESSION['email']);
    if ($accountController->getRole($_SESSION['email']) == 2) {
        $state = 0;
    } else {
        $state = 1;
    }
} else {
    $currentUserId = null;
    $state = 0;
}
$commentController->leaveComment($projectId, $name, $comment, $currentUserId, $state);