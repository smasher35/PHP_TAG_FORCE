<?php namespace AINET\MVC\Model;
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

}