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


}