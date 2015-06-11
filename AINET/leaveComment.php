<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 09-06-2015
 * Time: 23:47
 */

require 'bootstrap.php';

use AINET\MVC\Model\CommentController;

$commentController = new \AINET\MVC\Controllers\CommentController();

$projectId = $_POST['project_id'];
//$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['comment'];

/*var_dump($projectId);
var_dump($name);
var_dump($comment);*/

$commentController->leaveComment($projectId, $name, $comment);