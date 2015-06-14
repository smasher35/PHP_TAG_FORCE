<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 28/04/2015
 * Time: 14:40
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\InstitutionController;
use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\CommentController;
use AINET\MVC\Controllers\TagsController;
use AINET\MVC\Controllers\ProjectTagsController;

if (isset ($_GET['page'])) {
    $page = $_GET['page'];
    $limit = $page * 10;
    $offset = $limit - 10;
}
else {
    $page = 1;
    $limit = $page * 10;
    $offset = $limit - 10;
}

$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}else {

	$institutionController = new InstitutionController();
	$accountController = new AccountController();
    $projectControler = new ProjectController();
    $commentsController = new CommentController();
    $tagsController = new TagsController();
    $projectTagsController = new ProjectTagsController();

    //----------------ACCOUNTS--------------//
	$role = $accountController->getRole($_SESSION['email']);
	$users = $accountController->listUsers();
    $usersActive = $accountController->getListActiveAcounts();
    $usersDisabled = $accountController->getListDisabledAccounts();
    $usersDeleted = $accountController->getListDeletedAccounts();
    $currentUserID = $accountController->getUserId($_SESSION['email']);



    //----------------PROJECTS--------------//
    $projects = $projectControler->listProjects($limit, $offset);
    $projectsRejected = $projectControler->listRejectedProjects();
    $projectsDeleted = $projectControler->listDeletedProjects();
    $projectsPending = $projectControler->listPendingProjects();
    $projectsAproved = $projectControler->listAprovedProjects();

    //---------------- COMMENTS --------------//
    $comments = $commentsController->listComments();
    $commentsApproved = $commentsController->listAprovedComments();
    $commentsPending = $commentsController->listPendingComments();
    $commentsRejected = $commentsController->listRejectedComments();
    $commentsDeleted = $commentsController->listDeletedComments();

    //---------------- TAGS --------------//


    //---------------- PROJECT TAGS --------------//
    $tags = $projectTagsController->listAllTags();
    $tagsApproved = $projectTagsController->listAprovedTags();
    $tagsPending = $projectTagsController->listPendingTags();
    $tagsRejected = $projectTagsController->listRejectedTags();
    $tagsDeleted = $projectTagsController->listDeletedTags();


    $title = "PHP TAG FORCE - DashBoard";


	if ($role == 4){
		require('MVC/Views\DashBoards\adminDash.view.php');
	}

	if ($role == 1) {
		require('MVC/Views\DashBoards\editorDash.view.php');
	}

	if ($role == 2) {
		require('MVC/Views\DashBoards\authorDash.view.php');
	}


}









