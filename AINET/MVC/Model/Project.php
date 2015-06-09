<?php namespace AINET\MVC\Model;


class Project extends AbstractModel {

    public $id; //int (10) NOT NULL
    public $name; //varchar(255) NOT NULL
    public $acronym; //varchar (255)
    public $description; //text NOT NULL
    public $type; //varchar(255)
    public $theme; //varchar(255)
    public $keywords; //text
    public $started_at; //date NOT NULL
    public $finished_at; //date NULLABLE
    public $created_by; //int(10) NOT NULL
    public $updated_by; //int(10) NOT NULL
    public $approved_by; //int(10) NULLABLE
    public $used_software;// text
    public $used_hardware; //text
    public $observations; //text  NOT NULL
    public $featured_until; //date NOT NULL
    public $replaces_id; //int(10) DEFAULT NULL
    public $state; //int(10) NOT NULL
    public $refusal_msg; //varchar(255)  DEFAULT NULL
    public $deleted_at; //timestamp NULL DEFAULT NULL
    public $created_at; //timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    public $updated_at;

    public static function all()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function getListRecentProjects()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects ORDER BY created_at DESC LIMIT 4 OFFSET 0');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    //PENDING STATE = 0
    public static function getListPendingProjects()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects WHERE state = 0');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    //APROVED STATE = 1
    public static function getListAprovedProjects()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects WHERE state = 1');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    //REJECTED STATE = 2
    public static function getListRejectedProjects()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects WHERE state = 2');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    //DELETED STATE = 3
    public static function getListDeletedProjects()
    {
        $result = AbstractModel::dbQuery('SELECT * FROM projects WHERE state = 3');
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    /**
     * @return mixed
     */
    public static function getState($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE id = '$id'");
        $project=$result->fetch_object('AINET\MVC\Model\Project');
        return $project->state;
    }

    public static function getProjectName($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE id = '$id'");
        $project=$result->fetch_object('AINET\MVC\Model\Project');
        return $project->name;
    }

    public static function setState($id, $state, $refusalMsg)
    {
        AbstractModel::dbQuery("UPDATE projects SET state = '$state', refusal_msg='$refusalMsg' WHERE id = '$id'");
    }

    public static function getListProjectById($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE id = '$id'");
        $project=$result->fetch_object('AINET\MVC\Model\Project');
        return $project;
    }

    /*public static function addProject($uploadedFile)
    {
        //INSERIR NA BD
        $query = 'insert into projets (name,acronym,description,type,theme,keywords,started_at,finished_at,created_by,updated_by,approved_by,used_software,used_hardware,observations,featured_until,replaces_id,state,refusal_msg,deleted_at,created_at,updated_at) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $conn = self::dbConnection();
        $stm = $conn->prepare($query);
        if ($stm) {
            $stm->bind_param("ssssssddiiisssdiisddd",$account->name,$account->email,$account->al_email,$account->password,$account->institution_id,$account->position,$account->photo_url,$account->profile_url,$account->flags,$account->role,$account->remember_token,$account->created_at,$account->updated_at);
            if ($stm->execute()) {
                header('Location: http://192.168.56.101/php_tag_force/AINET/dashBoards.php');
                exit(0);
            }else {
                //return error
            }
        }
    }*/

}