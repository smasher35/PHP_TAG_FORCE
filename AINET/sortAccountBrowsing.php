<?php

require 'bootstrap.php';
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 05-06-2015
 * Time: 22:15
 */

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;


//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;



$accountController = new AccountController();




$limit = $_GET['limit'];
$offset = $_GET['offset'];
$sortBy = $_GET['sort_by'];
$orderBy  = $_GET['order_by'];



$accountController->sortAccountBrowsing($limit,$offset,$sortBy,$orderBy);


