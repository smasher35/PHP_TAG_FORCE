<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 10:38
 */

require 'Config/config.php';

use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\AuthenticationController;

set_include_path(get_include_path().PATH_SEPARATOR.realpath('..'));
spl_autoload_register();

session_start();

$accountControler = new AccountController();
$authController = new AuthenticationController();
if($authController->isAuthenticated()) {
    $actualUser = $accountControler->getUserId($_SESSION['email']) ;
    $actualUserName = $accountControler->getUserName($actualUser);
    $isAuthenticated = true;
}