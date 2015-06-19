<?php

use AINET\MVC\Controllers\MediaController;
use AINET\MVC\Controllers\ProjectController;

$mediaController = new MediaController();
$projectController = new ProjectController();


$uploadedFile = $mediaController->uploadFile();
$projectController->createProject($uploadedFile);
