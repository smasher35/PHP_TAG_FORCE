<?php namespace AINET\MVC\Model;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 13/06/2015
 * Time: 15:53
 */




class Tag extends AbstractModel {

    public $id; //int (10) NOT NULL
    public $tag; //varchar(255) NOT NULL




    public static function getTagtName($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM tags WHERE id = '$id'");
        $tag=$result->fetch_object('AINET\MVC\Model\Tag');
        return $tag->tag;
    }



}