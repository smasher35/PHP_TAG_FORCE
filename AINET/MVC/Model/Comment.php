<?php namespace AINET\MVC\Model;

use Ainet\Support\urlHelper;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 08/06/2015
 * Time: 02:30
 */




class Comment extends AbstractModel {
    public $id; //int (10) NOT NULL
    public $comment; //varchar(255) NOT NULL
    public $project_id; //int (10) NOT NULL
    public $user_name; //varchar(255)
    public $user_id;//int (10) NOT NULL
    public $approved_by; //varchar(255)
    public $replaces_id; //int(10) DEFAULT NULL
    public $state; //int(10) NOT NULL
    public $refusal_msg; //varchar(255)  DEFAULT NULL
    public $created_at; //timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    public $updated_at;

    public static function all()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM comments');
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;
    }

    public static function listPendingComments(){
        $result = AbstractModel::dbQuery('SELECT * FROM comments WHERE state = 0');
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function listAprovedComments(){
        $result = AbstractModel::dbQuery('SELECT * FROM comments WHERE state = 1');
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function listRejectedComments(){
        $result = AbstractModel::dbQuery('SELECT * FROM comments WHERE state = 2');
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function listDeletedComments(){
        $result = AbstractModel::dbQuery('SELECT * FROM comments WHERE state = 3');
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function setComment($projectId, $name, $comment, $currentUserId)
    {

        //AbstractModel::dbQuery("INSERT INTO comments (comment, project_id, user_name, user_id, approved_by, replaces_id, state, refusal_msg, created_at, updated_at) VALUES ('$comment', '$projectId', '$name', '$userId', null, null, 0, null, NOW(), NOW())");

        //INSERIR NA BD
       /* $query = "INSERT INTO comments (comment, project_id, user_name, user_id, approved_by, replaces_id, state, refusal_msg, created_at, updated_at) VALUES (?,?,?,?,null,null,0,null,NOW(),NOW())";*/
        $query = "INSERT INTO comments (comment, project_id, user_name, user_id, state, created_at, updated_at) VALUES (?,?,?,?,0,NOW(), NOW())";
        $conn = AbstractModel::dbConnection();
        $stm = $conn->prepare($query);
        //FALTA DAQUI PARA BAIXO
        if ($stm) {
            $stm->bind_param("sisi", $comment, $projectId, $name, $currentUserId );
            if ($stm->execute()) {

                $redirect = urlHelper::urlBuilder("projectDetails.php?project_id=" . $projectId);
                header($redirect);
                exit(0);
            }else {
                $redirect = urlHelper::urlBuilder("errorPage.php");
                header($redirect);
                //return error
            }

        }
        else {
            $redirect = urlHelper::urlBuilder("errorPage.php");
            header($redirect);
        }

    }

    public static function getAprovedCommentsByProject($projectId)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE state = 1 AND project_id ='$projectId' ");
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;
    }

    public static function setState($id, $state, $refusalMsg,$userId)
    {

        AbstractModel::dbQuery("UPDATE comments SET state = '$state', refusal_msg='$refusalMsg', approved_by='$userId' WHERE id = '$id'");
    }

    public static function setRejectedState($id, $state, $refusalMsg)
    {

        AbstractModel::dbQuery("UPDATE comments SET state = '$state', refusal_msg='$refusalMsg' WHERE id = '$id'");
    }

    public static function listCommentsByOwnerPending($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE user_id='$currentUserID' AND state = 0");
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function listCommentsByOwnerAproved($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE user_id='$currentUserID' AND state=1");
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function listCommentsByOwner($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE user_id='$currentUserID'");
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }


    public static function listCommentsByOwnerRejected($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE user_id='$currentUserID' AND state = 2");
        $comments = [];
        if ($result) {
            while($comment = $result -> fetch_object('AINET\MVC\Model\Comment')) {
                array_push($comments, $comment);
            }
        }
        return $comments;

    }

    public static function getComment($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM comments WHERE id = '$id'");
        $comment=$result->fetch_object('AINET\MVC\Model\Comment');
        return $comment->comment;
    }


}