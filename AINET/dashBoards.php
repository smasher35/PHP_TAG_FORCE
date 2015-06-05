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


$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}else {
	$institutionController = new InstitutionController();
	$accountController = new AccountController();
    $projectControler = new ProjectController();

    //----------------ACCOUNTS--------------//
	$role = $accountController->getRole($_SESSION['email']);
	$users = $accountController->listUsers();
    $usersActive = $accountController->getListActiveAcounts();
    $usersDisabled = $accountController->getListDisabledAccounts();
    $usersDeleted = $accountController->getListDeletedAccounts();

    //----------------PROJECTS--------------//
    $projects = $projectControler->listProjects();
    $projectsRejected = $projectControler->listRejectedProjects();
    $projectsDeleted = $projectControler->listDeletedProjects();
    $projectsPending = $projectControler->listPendingProjects();
    $projectsAproved = $projectControler->listAprovedProjects();

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









