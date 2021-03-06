<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 23/04/2015
 * Time: 11:58
 */

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\ProjectController;

require 'bootStrap.php';

global $owner_id;

$projectController = new ProjectController();
$accountController = new AccountController();
//----Parametro Owner_ID---------//
if (isset($_GET['owner_id'])) {
    $owner_id = $_GET['owner_id'];
} else {
    $owner_id = 0;
}

//-------Parametro para Paginação---------//
if (isset ($_GET['page'])) {
    $page = $_GET['page'];
    $limit = 10;
    $offset = $page * $limit - 10;
} else {
    $page = 1;
    $limit = 10;
    $offset = $page * $limit - 10;
}

//------------Parametro Order By-------------------//
if (isset ($_GET['orderBy'])) {
    $orderBy = $_GET['orderBy'];

} else {
    $orderBy = "name";
}
//------------Parametro Order-------------------//
if (isset ($_GET['order'])) {
    $order = $_GET['order'];
} else {
    $order = "ASC";
}


if (isset($_GET['search'])) {
    $searchString = $_GET['search'];
    if (isset ($_GET['page'])) {
        $page = $_GET['page'];
        $limit = 10;
        $offset = $page * $limit - 10;
    } else {
        $page = 1;
        $limit = 10;
        $offset = $page * $limit - 10;
    }
    $numberOfFoundedProjects = $projectController->countFoundedProjects($searchString);
    $lastPage = ceil($numberOfFoundedProjects / 10);

    $projects = $projectController->searchProjects($searchString, $limit, $offset);
} else {
    //owner-id == 0 mostra todos os  projectos
    if ($owner_id == 0) {
        if ($orderBy == "created_by") {
            $projects = $projectController->listProjectsOrderByOwner($order, $limit, $offset);
        } else {
            $projects = $projectController->listProjects($orderBy, $order, $limit, $offset);
        }

        $numberOfProjects = $projectController->countAprovedProjects();
        $lastPage = ceil($numberOfProjects / 10);
    } else {
        $projects = $projectController->listProjectsByOwner($owner_id, $orderBy, $order, $limit, $offset);
        $numberOfProjects = $projectController->countProjectsByOwner($owner_id);
        $lastPage = ceil($numberOfProjects / 10);
    }

}

$title = "PHP TAG FORCE - Projects Browser";
require('MVC/Views/projects/projectsBrowser.view.php');