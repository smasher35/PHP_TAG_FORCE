<?php namespace AINET\MVC\Controllers;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:19
 */

use AINET\MVC\Model\ProjectTag;
use Ainet\Support\urlHelper;


class ProjectTagsController {

    public function listTagsByProject($projectId)
    {

        return ProjectTag::listTagsByProject($projectId);
    }


    public function listAllTags()
    {
        return ProjectTag::all();
    }

    public function listPendingTags()
    {
        return ProjectTag::listPendingTags();
    }

    public function listAprovedTags()
    {
        return ProjectTag::listAprovedtags();
    }

    public function listRejectedTags()
    {
        return ProjectTag::listRejectedTags();
    }

    public function listDeletedTags()
    {
        return ProjectTag::listDeletedTags();
    }

    public function setAprovedTags($id, $userId)
    {
        ProjectTag::setState($id, 1,$userId);
        $redirect = urlHelper::urlBuilder("dashBoards.php");
        header($redirect);
    }

    public function listTagsByOwnerPending($currentUserID, $limit, $offset)
    {
        return ProjectTag::listTagsByOwnerPending($currentUserID, $limit, $offset);
    }

    public function listTagsByOwnerAproved($currentUserID, $limit, $offset)
    {
        return ProjectTag::listTagsByOwnerAproved($currentUserID, $limit, $offset);
    }

    public function listTagsByOwnerRejected($currentUserID, $limit, $offset)
    {
       return ProjectTag::listTagsByOwnerRejected($currentUserID, $limit, $offset);
    }
}