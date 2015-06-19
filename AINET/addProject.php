<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 08-06-2015
 * Time: 17:13
 */

require 'bootstrap.php';

use AINET\MVC\Controllers\AuthenticationController;
use AINET\MVC\Controllers\AccountController;
use AINET\MVC\Controllers\ProjectController;
use AINET\MVC\Controllers\TagsController;
use Ainet\Support\urlHelper;



//valida autenticação no site
$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
    $authController->redirectToLogin();
}

$authenticated = true;


$projectController = new ProjectController();
$authController = new AuthenticationController();
$accountController = new AccountController();
$role = $accountController->getRole($_SESSION['email']);


//TODO: Alterar para os campos do formulário do NEW PROJECT



//TODO retornar os erros

//created_by = user autenticado
//updated_by = user autenticado

if ($_POST['name'] != "" && $_POST['description'] != "" && $_POST['started_at'] != ""){
    $name = $_POST['name'];
    $description = $_POST['description'];

    $acronym = $_POST['acronym'];
    $type = $_POST['type'];
    $theme = $_POST['theme'];
    $keywords = $_POST['keywords'];
    $usedSoftware = $_POST['software'];
    $usedHardware = $_POST['hardware'];
    $observations = $_POST['observations'];
    $startedAt = $_POST['started_at'];
    $finishedAt = $_POST['finished_at'];
    $accountId = $accountController->getUserId($_SESSION['email']);


    if ($accountId == 2) { // Autor
        $state = 0; //Estado pendente
        $aprovedBy = null;
    }
    else { //Admin e Editor
        $state = 1; //Estado aprovado
        $aprovedBy = $accountId;
    }



    $project = compact("name", "description", "acronym", "type", "theme", "keywords", "usedSoftware", "usedHardware", "observations", "accountId" , "state", "finishedAt", "startedAt", "aprovedBy");
    $projectController->createProject($project);
}
else {
    $redirect = urlHelper::urlBuilder("addProjectPage.php?result_code=-1");
    header($redirect);
}
