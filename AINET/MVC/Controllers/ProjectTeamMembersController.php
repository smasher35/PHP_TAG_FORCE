<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\ProjectTeamMember;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 22:25
 */
class ProjectTeamMembersController
{

    public function listTeamMembersByProject($project_id)
    {

        return ProjectTeamMember::listTeamElementsByProject($project_id);

    }

}