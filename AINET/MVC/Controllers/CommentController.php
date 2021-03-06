<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Comment;
use Ainet\Support\urlHelper;

class CommentController
{

    public function listComments()
    {
        return Comment::all();
    }


    public function listPendingComments()
    {
        return Comment::listPendingComments();
    }

    public function listAprovedComments()
    {
        return Comment::listAprovedComments();
    }

    public function listRejectedComments()
    {

        return Comment::listRejectedComments();
    }

    public function listDeletedComments()
    {
        return Comment::listDeletedComments();
    }

    public function leaveComment($projectId, $name, $comment, $currentUserId, $state)
    {
        Comment::setComment($projectId, $name, $comment, $currentUserId, $state);
    }

    public function listAprovedCommentsByProject($projectId)
    {
        return Comment::getAprovedCommentsByProject($projectId);
    }

    public function setAprovedComments($id, $userId)
    {
        Comment::setState($id, 1, null, $userId);
        $redirect = urlHelper::urlBuilder("dashBoards.php");
        header($redirect);
    }


    public function setRejectedComment($id, $refusalMsg)
    {

        Comment::setRejectedState($id, 2, $refusalMsg);
        $redirect = urlHelper::urlBuilder("dashBoards.php");
        header($redirect);
    }

    /**
     * @param $currentUserID
     * @param $limit
     * @param $offset
     */
    public function listCommentsByOwnerPending($currentUserID, $limit, $offset)
    {
        return Comment::listCommentsByOwnerPending($currentUserID, $limit, $offset);
    }

    public function listCommentsByOwnerAproved($currentUserID, $limit, $offset)
    {
        return Comment::listCommentsByOwnerAproved($currentUserID, $limit, $offset);
    }

    public function listCommentsByOwner($currentUserID, $limit, $offset)
    {
        return Comment::listCommentsByOwner($currentUserID, $limit, $offset);
    }

    public function listCommentsByOwnerRejected($currentUserID, $limit, $offset)
    {
        return Comment::listCommentsByOwnerRejected($currentUserID, $limit, $offset);
    }

    public function  getCommentText($id)
    {
        return Comment::getComment($id);
    }

    public function getNumberOfCommentsByUserId($id)
    {
        return Comment::countComments($id);
    }

    public function setDeletedComment($commentId)
    {
        Comment::setDeletedState($commentId);
        $redirect = urlHelper::urlBuilder("dashBoards.php");
        header($redirect);
    }

}