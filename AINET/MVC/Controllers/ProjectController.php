<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Project;



class ProjectController {

    /**********Criar novo Projeto**********/
    public function createProject($uploadedFile)
    {
        Project::addProject($uploadedFile);
    }


    public function listProjectByid($id)
    {
        return Project::getListProjectById($id);
    }

    public function listProjectsByOwner($owner_id, $limit, $offset)
    {
        return Project::listProjectsByOwner($owner_id, $limit, $offset);
    }

    public function listProjectsByOwnerPending($owner_id,$limit,$offset)
    {
        return Project::listProjectsByOwnerPending($owner_id,$limit,$offset);
    }

    public function listProjectsByOwnerAproved($owner_id,$limit,$offset)
    {
        return Project::listProjectsByOwnerAproved($owner_id,$limit,$offset);
    }

    public function listProjectsByOwnerRejected($owner_id,$limit,$offset)
    {
        return Project::listProjectsByOwnerRejected($owner_id,$limit,$offset);
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

    public function getProjectName($id)
    {
        return Project::getProjectName($id);
    }

    public function setAprovedProject($id, $userId)
    {
        Project::setState($id, 1, null,$userId);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#projAproved');
    }

    public function setDeletedProject($id)
    {
        Project::setState($id, 3, null,null);
    }

    public function setRejectedProject($id, $refusalMsg)
    {
        Project::setRejectedState($id, 2, $refusalMsg);
        //header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#projAproved');
    }

    public function listProjects($limit, $offset)
    {
        return Project::all($limit, $offset);
    }

    public function getProjectImage($id)
    {
        $userProfileImgUrl = Project::getProjectImg($id);

        return $userProfileImgUrl;
    }

    public function listLastUpdatedProjects()
    {
        return Project::getLastUpdatedProjects();
    }

    public function searchProjects($searchString)
    {
        return Project::searchProject($searchString);
    }

    public function countProjects()
    {
        return Project::getNumberOfProjects();
    }

    public function countProjectsByOwner($owner_id)
    {
        return Project::getNumberOfProjectsByOwner($owner_id);
    }


}