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

$projectController = new ProjectController();
$projects = $projectController->listProjects();
$accountController = new AccountController();



$title = "PHP TAG FORCE - Projects Browser";
require('MVC/Views/projects/projectsBrowser.view.php');