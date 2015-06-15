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
if (isset($_GET['order_by'])) {
    $orderBy = $_GET['order_by'];
}
else {
    $orderBy = "name";
}
if (isset($_GET['order'])) {
    $order = $_GET['order'];
}
else {
    $order = "ASC";
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


    //----------------ACCOUNTS--------------//
	$role = $accountController->getRole($_SESSION['email']);
	$users = $accountController->listUsers();
    $usersActive = $accountController->getListActiveAcounts();
    $usersDisabled = $accountController->getListDisabledAccounts();
    $usersDeleted = $accountController->getListDeletedAccounts();
    $currentUserID = $accountController->getUserId($_SESSION['email']);



    //----------------PROJECTS--------------//
    $projects = $projectControler->listProjects($orderBy, $order,$limit, $offset);
    $projectsRejected = $projectControler->listRejectedProjects();
    $projectsDeleted = $projectControler->listDeletedProjects();
    $projectsPending = $projectControler->listPendingProjects();
    $projectsAproved = $projectControler->listAprovedProjects();
    $projectsByOwnerPending = $projectControler->listProjectsByOwnerPending($currentUserID,$limit,$offset);
    $projectsByOwnerAproved = $projectControler->listProjectsByOwnerAproved($currentUserID,$limit,$offset);
    $projectsByOwnerRejected = $projectControler->listProjectsByOwnerRejected($currentUserID,$limit,$offset);

    //---------------- COMMENTS --------------//
    $comments = $commentsController->listComments();
    $commentsApproved = $commentsController->listAprovedComments();
    $commentsPending = $commentsController->listPendingComments();
    $commentsRejected = $commentsController->listRejectedComments();
    $commentsDeleted = $commentsController->listDeletedComments();
    $commentsByOwnerPending = $commentsController->listCommentsByOwnerPending($currentUserID,$limit,$offset);
    $commentsByOwnerAproved = $commentsController->listCommentsByOwnerAproved($currentUserID,$limit,$offset);
    $commentsByOwnerRejected = $commentsController->listCommentsByOwnerRejected($currentUserID,$limit,$offset);

    //---------------- TAGS --------------//


    //---------------- PROJECT TAGS --------------//
    $tags = $projectTagsController->listAllTags();
    $tagsApproved = $projectTagsController->listAprovedTags();
    $tagsPending = $projectTagsController->listPendingTags();
    $tagsRejected = $projectTagsController->listRejectedTags();
    $tagsDeleted = $projectTagsController->listDeletedTags();
    $tagsByOwnerPending = $projectTagsController->listTagsByOwnerPending($currentUserID,$limit,$offset);
    $tagsByOwnerAproved = $projectTagsController->listTagsByOwnerAproved($currentUserID,$limit,$offset);
    $tagsByOwnerRejected = $projectTagsController->listTagsByOwnerRejected($currentUserID,$limit,$offset);


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









