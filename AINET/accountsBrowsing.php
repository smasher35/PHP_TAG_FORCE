<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 27/04/2015
 * Time: 15:47
 */

require 'bootstrap.php';


use AINET\MVC\Controllers;
use AINET\MVC\Controllers\InstitutionController;

global $owner_id;


$projectController= new Controllers\ProjectController();
$accountController = new Controllers\AccountController();

$institutionController = new InstitutionController();

//-------Parametro para Paginação---------//
if (isset ($_GET['page'])) {
    $page = $_GET['page'];
    $limit = 10;
    $offset = $page * $limit - 10;
}
else {
    $page = 1;
    $limit = 10;
    $offset = $page * $limit - 10;
}

//------------Parametro Order By-------------------//
if (isset ($_GET['orderBy'])) {
    $orderBy = $_GET['orderBy'];

}
else {
    $orderBy = "name";
}
//------------Parametro Order-------------------//
if (isset ($_GET['order'])) {
    $order = $_GET['order'];
}
else {
    $order = "ASC";
}


$numberOfAccounts = $accountController->countActiveDisableAccounts();
$lastPage = ceil($numberOfAccounts/10);



$users = $accountController->listActiveAndDisableAccounts($limit, $offset,$orderBy,$order);

/*if ($orderBy == "name") {
    $accounts = $projectController->listProjectsOrderByOwner($order, $limit, $offset);
}
else {
    $projects = $projectController->listProjects($orderBy, $order, $limit, $offset);
}

$numberOfProjects = $projectController->countAprovedProjects();
$lastPage = ceil($numberOfProjects/10);*/




$title = "PHP TAG FORCE - Accounts Browsing";

require('MVC/Views/accountsBrowsing.view.php');
