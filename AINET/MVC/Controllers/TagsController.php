<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Tag;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:53
 */
class TagsController
{


    public function getTagName($id)
    {
        return Tag::getTagtName($id);
    }

    public function listAll()
    {
        return Tag::all();
    }

    public function countTagsByOwner($userId)
    {
        Tag::countTagsByOwner($userId);
    }


}