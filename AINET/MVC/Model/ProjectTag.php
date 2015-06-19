<?php namespace AINET\MVC\Model;

use Ainet\Support\urlHelper;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:19
 */




class ProjectTag  extends AbstractModel {

    public $id; //int (10) NOT NULL
    public $project_id; //int (10) NOT NULL
    public $tag_id; //int (10) NOT NULL
    public $state; //int (10) NOT NULL
    public $added_by; //int(10) NULLABLE
    public $approved_by; //int(10) NULLABLE
    public $created_at; //timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    public $updated_at;//timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'



    public static function all()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM project_tag');
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }

    public static function listPendingTags(){
        $result = AbstractModel::dbQuery('SELECT * FROM project_tag where state=0');
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }

    public static function listAprovedtags(){
        $result = AbstractModel::dbQuery('SELECT * FROM project_tag where state=1');
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }

    public static function listRejectedTags(){
        $result = AbstractModel::dbQuery('SELECT * FROM project_tag where state=2');
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }

    public static function listDeletedTags(){
        $result = AbstractModel::dbQuery('SELECT * FROM project_tag where state=3');
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }



    public static function listTagsByProject($projectId)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_tag WHERE project_id='$projectId'");
        $projectTags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($projectTags, $tag);
            }
        }
        return $projectTags;
    }

    public static function setState($id, $state, $userId)
    {
        AbstractModel::dbQuery("UPDATE project_tag SET state = '$state', approved_by='$userId' WHERE id = '$id'");
    }

    public static function listTagsByOwnerPending($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_tag where added_by='$currentUserID' AND state=0");
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;

    }

    public static function listTagsByOwnerAproved($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_tag where added_by='$currentUserID' AND state=1");
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;

    }


    public static function listTagsByOwnerRejected($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_tag where added_by='$currentUserID' AND state=2");
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;

    }

    public static function listTagsByOwnerAll($currentUserID, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_tag where added_by='$currentUserID'");
        $tags = [];
        if ($result) {
            while($tag = $result -> fetch_object('AINET\MVC\Model\ProjectTag')) {
                array_push($tags, $tag);
            }
        }
        return $tags;
    }

}