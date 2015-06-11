<?php namespace AINET\MVC\Model;
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

    public static function leaveComment($projectId, $name, $comment, $userId=null){

        AbstractModel::dbQuery("INSERT INTO comments (comment, project_id, user_name, user_id, approved_by, replaces_id, state, refusal_msg, created_at, updated_at) VALUES ('$comment', '$projectId', '$name', null, null, null, 0, null, NOW(), NOW())");

        //INSERIR NA BD
        /*$query = "INSERT INTO comments (comment, project_id, user_name, user_id, approved_by, replaces_id, state, refusal_msg, created_at, updated_at) VALUES (?,?,?,null,null,null,0,null,NOW(),NOW())";
        $conn = self::dbConnection();
        $stm = $conn->prepare($query);
        //FALTA DAQUI PARA BAIXO
        if ($stm) {
            $stm->bind_param("ssssisisiisdd",$account->name,$account->email,$account->al_email,$account->password,$account->institution_id,$account->position,$account->photo_url,$account->profile_url,$account->flags,$account->role,$account->remember_token,$account->created_at,$account->updated_at);
            if ($stm->execute()) {
                header('Location: http://192.168.56.101/php_tag_force/AINET/dashBoards.php');
                exit(0);
            }else {
                //return error
            }
        }*/

    }




}