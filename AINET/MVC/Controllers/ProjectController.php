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

    public function listProjectsByOwner($owner_id, $orderBy, $order, $limit, $offset)
    {
        return Project::listProjectsByOwner($owner_id, $orderBy, $order, $limit, $offset);
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
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php');
    }

    public function setDeletedProject($id)
    {
        Project::setDeleteState($id);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php');
    }

    public function setRejectedProject($id, $refusalMsg)
    {
        Project::setRejectedState($id, $refusalMsg);
        //header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php');
    }

    public function listProjects($orderBy, $order, $limit, $offset)
    {
        return Project::all($orderBy, $order, $limit, $offset);
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

    public function searchProjects($searchString, $limit, $offset)
    {
        return Project::searchProject($searchString, $limit, $offset);
    }

    public function countAprovedProjects()
    {
        return Project::getNumberOfAprovedProjects();
    }

    public function countProjectsByOwner($owner_id)
    {
        return Project::getNumberOfProjectsByOwner($owner_id);
    }

    public function countFoundedProjects($searchString)
    {
        return Project::getNumberOfFoundedProjects($searchString);
    }

    public function listProjectsOrderByOwner($order, $limit, $offset)
    {
        return Project::getProjectsOrderByOwner($order, $limit, $offset);
    }


}