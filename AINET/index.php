<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 18/04/2015
 * Time: 15:47
 */

/*
	 *Roles:
	 *1 - Administrador
	 *2 - Editor
	 *3 - Autor
*/

require 'bootstrap.php';


use AINET\MVC\Controllers\ProjectController;

$owner_id=0;

$projectController = new ProjectController();
$recentProjects = $projectController->listRecentProjects();

$title = "PHP TAG FORCE - Home";

require('MVC/Views/headerFooter/header.view.php');
require('MVC/Views/main.view.php');
require('MVC/Views/headerFooter/footer.view.php');