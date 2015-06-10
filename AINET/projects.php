<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 23/04/2015
 * Time: 11:58
 */

use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\AccountController;

require 'bootStrap.php';

global $owner_id;

$projectController = new ProjectController();
$accountController = new AccountController();


$owner_id =$_GET['owner_id'];

if ($owner_id == 1){
    $projects = $projectController->listProjects();
}else {
    $owner =$_GET['owner_id'];
    $projects = $projectController->listProjectsByOwner($owner);
}




$title = "PHP TAG FORCE - Projects Browser";
require('MVC/Views/projects/projectsBrowser.view.php');