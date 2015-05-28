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

$controller = new Controllers\AccountController();
$users = $controller->listUsers();
$title = "List accounts";

$title = "PHP TAG FORCE - Accounts Browsing";

require('MVC/Views/accountsBrowsing.view.php');
