<?php
/**
 * Created by PhpStorm.
 * User: Paulo Penicheiro - 2130628
 * Date: 30/04/2015
 * Time: 15:56
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\CommentController;
use AINET\MVC\Controllers\InstitutionController;
use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\ProjectTagsController;
use AINET\MVC\Controllers\ProjectTeamMembersController;
use AINET\MVC\Controllers\TagsController;
use Ainet\Support\TimeHelper;

$authenticationController = new AuthenticationController();
$projectController = new ProjectController();
$accountController = new AccountController();
$commentController = new CommentController();
$projectTagsController = new ProjectTagsController();
$projectTeamMembersController = new ProjectTeamMembersController();
$institutionController = new InstitutionController();
$tagsController = new TagsController();
$timeHelper = new TimeHelper();

$projectid = $_GET['project_id'];

if ($projectid == null) {
    $authenticationController->redirectToProjectsBrowser();
}

$commentsList = $commentController->listAprovedCommentsByProject($projectid);
$actualproject = $projectController->listProjectByid($projectid);
$title = "PHP TAG FORCE - Projects Technical Sheet";


require('MVC/Views/projects/projectDetails.view.php');