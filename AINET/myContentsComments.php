<?php

require 'bootstrap.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;
use AINET\MVC\Controllers\InstitutionController;
use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\ProjectTagsController;
use AINET\MVC\Controllers\TagsController;


$authController = new AuthenticationController();
if (!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
} else {

    $institutionController = new InstitutionController();
    $projectControler = new ProjectController();
    $commentsController = new CommentController();
    $tagsController = new TagsController();
    $projectTagsController = new ProjectTagsController();
    $accountController = new AccountController();

    if (isset ($_GET['page'])) {
        $page = $_GET['page'];
        $limit = $page * 10;
        $offset = $limit - 10;
    } else {
        $page = 1;
        $limit = $page * 10;
        $offset = $limit - 10;
    }

    //----------------ACCOUNTS--------------//
    if (isset($_GET['owner_id'])) {
        $currentUserID = $_GET['owner_id'];
    }

    //----------------COMMENTS--------------//
    $commentsByOwner = $commentsController->listCommentsByOwner($currentUserID, $limit, $offset);

    $numberOfComments = $commentsController->getNumberOfCommentsByUserId($accountController->getUserId($_SESSION['email']));
    $lastPage = ceil($numberOfComments / 10);


    $title = "PHP TAG FORCE - My Comments";
    require 'MVC\Views\myContents\myContentsComments.view.php';
}