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

$projects = $projectController->searchProjects($searchString);



$title = "PHP TAG FORCE - Search Result";
require('MVC/Views/searchResults.view.php');
require('MVC/Views/projects/projectsBrowser.view.php');
