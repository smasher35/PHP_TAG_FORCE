<?php namespace AINET\MVC\Controllers;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:53
 */

use AINET\MVC\Model\Tag;


class TagsController {


    public function getTagName($id)
    {
        return Tag::getTagtName($id);
    }

}