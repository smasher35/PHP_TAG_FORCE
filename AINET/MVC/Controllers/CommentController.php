<?php namespace AINET\MVC\Controllers;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 08/06/2015
 * Time: 02:30
 */

use AINET\MVC\Model\Comment;


class CommentController {

    public function listComments() {
        return Comment::all();
    }


    public function listPendingComments() {
        return Comment::listPendingComments();
    }

    public function listAprovedComments() {
        return Comment::listAprovedComments();
    }

    public function listRejectedComments() {

        return Comment::listRejectedComments();
    }

    public function listDeletedComments() {
         return Comment::listDeletedComments();
    }
    public function leaveComment($projectId, $name, $comment){
        Comment::leaveComment($projectId, $name, $comment, null);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/projects.php');
    }

}