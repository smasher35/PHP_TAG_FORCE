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

if (isset($_GET['owner_id'])) {
    $owner_id = $_GET['owner_id'];
}
else {
    $owner_id = 0;
}


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




//$projects = $projectController->listProjects($limit, $offset);



//owner-id == 0 mostra todos os  projectos
if ($owner_id == 0){
    $projects = $projectController->listProjects($limit, $offset);
    $numberOfProjects = $projectController->countProjects();
    $lastPage = ceil($numberOfProjects/10);
}else {
    $projects = $projectController->listProjectsByOwner($owner_id, $limit, $offset);
    $numberOfProjects = $projectController->countProjectsByOwner($owner_id);
    $lastPage = ceil($numberOfProjects/10);
}




$title = "PHP TAG FORCE - Projects Browser";
require('MVC/Views/projects/projectsBrowser.view.php');