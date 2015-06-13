<?php namespace AINET\MVC\Model;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 22:25
 */




class ProjectTeamMember extends AbstractModel {

    public $id; //int (10) NOT NULL
    public $user_id; //int (10) NOT NULL
    public $project_id; //int (10) NOT NULL
    public $position; //int (10) NOT NULL
    public $created_at; //timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    public $updated_at;//timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'



    public static function listTeamElementsByProject($projectId)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM project_user WHERE project_id='$projectId'");
        $projectTeamMembers = [];
        if ($result) {
            while($user = $result -> fetch_object('AINET\MVC\Model\ProjectTeamMember')) {
                array_push($projectTeamMembers, $user);
            }
        }
        return $projectTeamMembers;
    }

}