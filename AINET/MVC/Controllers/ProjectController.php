<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Project;
use AINET\MVC\Model\Account;


class ProjectController {

    public function listProjects()
    {
        return Project::all();
    }


}