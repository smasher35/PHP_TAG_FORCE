<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Project;
use AINET\MVC\Model\Account;


class ProjectController {

    public function listProjects()
    {
        return Project::all();
    }
    public function listRejectedProjects()
    {
        return Project::getListRejected();
    }
    public function listDeletedProjects()
    {
        return Project::getListDeleted();
    }

    public function listRecentProjects()
    {
        return Project::getListRecentProjects();
    }


}