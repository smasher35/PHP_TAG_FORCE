<?php namespace AINET\MVC\Controllers;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:19
 */

use AINET\MVC\Model\ProjectTag;


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
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php');
    }
}