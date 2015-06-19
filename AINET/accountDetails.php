<?php
/**
 * Created by PhpStorm.
 * User: Paulo Penicheiro - 2130628
 * Date: 30/04/2015
 * Time: 15:56
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\InstitutionController;


$authenticationController = new AuthenticationController();
$accountController = new AccountController();
$institutionController = new InstitutionController();


$account=$accountController->getUserById($_GET['owner_id']);

if($account == null){

    $authenticationController->redirectToAccountBrowsing();
}

$title = "PHP TAG FORCE - Account Details";


require('MVC/Views/accounts/accountDetails.view.php');