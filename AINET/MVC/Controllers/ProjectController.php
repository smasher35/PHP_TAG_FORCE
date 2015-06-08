<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Project;
use AINET\MVC\Model\Account;


class ProjectController {


    public function listProjectByid($id){
        return Project::getListProjectById($id);
    }
    public function listRejectedProjects()
    {
        return Project::getListRejectedProjects();
    }
    public function listDeletedProjects()
    {
        return Project::getListDeletedProjects();
    }

    public function listRecentProjects()
    {
        return Project::getListRecentProjects();
    }

    public function listPendingProjects()
    {
        return Project::getListPendingProjects();
    }

    public function listAprovedProjects()
    {
        return Project::getListAprovedProjects();
    }
    public function getProjctState($id)
    {
        return Project::getState($id);
    }
    public function setAprovedProject($id)
    {
        Project::setState($id, 1);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#projAproved');
    }

    public function setDeletedProject($id)
    {
        Project::setState($id, 3);
    }

    public function setRejectedProject($id)
    {
        Project::setState($id, 2);
    }


}