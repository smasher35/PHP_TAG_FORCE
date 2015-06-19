<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 27/04/2015
 * Time: 15:47
 */

require 'bootstrap.php';


use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\InstitutionController;
use AINET\MVC\Controllers\ProjectController;

global $owner_id;


$projectController= new ProjectController();
$accountController = new AccountController();

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


$numberOfAccounts = $accountController->countActiveDisableAccounts();
$lastPage = ceil($numberOfAccounts/10);

if ($orderBy == "institution") {
    $users = $accountController->listActiveAndDisableAccountsOrderByInstitution($limit, $offset, $orderBy);
}
else {

    $users = $accountController->listActiveAndDisableAccounts($limit, $offset, $orderBy);
}


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
