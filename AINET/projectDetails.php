<?php
/**
 * Created by PhpStorm.
 * User: Paulo Penicheiro - 2130628
 * Date: 30/04/2015
 * Time: 15:56
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\AccountController;


$projectController = new ProjectController();
$accountController = new AccountController();

$projectid = $_GET['project_id'];


$actualproject = $projectController->listProjectByid($projectid);
$title = "PHP TAG FORCE - Projects Technical Sheet";


require('MVC/Views/projects/projectDetails.view.php');