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

//$owner_id =$_GET['owner_id'];

$searchString = $_GET['search'];


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
$numberOfFoundedProjects = $projectController->countFoundedProjects($searchString);
$lastPage = ceil($numberOfFoundedProjects/10);

$projects = $projectController->searchProjects($searchString, $limit, $offset);



$title = "PHP TAG FORCE - Search Result";
require('MVC/Views/searchResults.view.php');
require('MVC/Views/projects/projectsBrowser.view.php');
