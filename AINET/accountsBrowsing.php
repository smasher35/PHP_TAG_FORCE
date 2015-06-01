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

$accountController = new Controllers\AccountController();
$users = $accountController->listUsers();

$title = "PHP TAG FORCE - Accounts Browsing";

require('MVC/Views/accountsBrowsing.view.php');
