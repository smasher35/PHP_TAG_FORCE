<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Institution;

class InstitutionController
{

    public function listInstitutions()
    {
        return Institution::all();
    }

    public function getInstitutionId($name)
    {
        return Institution::getId($name);
    }

    public function  getInstitutionName($id)
    {
        return Institution::getName($id);
    }
}