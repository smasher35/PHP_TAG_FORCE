<?php namespace AINET\MVC\Model;

use Ainet\Support\urlHelper;

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
    public $featured_until; //date NULL
    public $replaces_id; //int(10) DEFAULT NULL
    public $state; //int(10) NOT NULL
    public $refusal_msg; //varchar(255)  DEFAULT NULL
    public $deleted_at; //timestamp NULL DEFAULT NULL
    public $created_at; //timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    public $updated_at;

    public static function all($orderBy, $order, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects where state = 1 ORDER BY $orderBy $order LIMIT  $limit OFFSET $offset");

        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function listProjectsByOwner($owner_id, $orderBy, $order, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by ='$owner_id' ORDER BY $orderBy $order LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function listProjectsByOwnerPending($owner_id, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by ='$owner_id' AND state=0 LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function listProjectsByOwnerAproved($owner_id, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by ='$owner_id' AND state=1 LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function listProjectsByOwnerAll($owner_id, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by ='$owner_id' LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }
        return $projects;
    }

    public static function listProjectsByOwnerRejected($owner_id, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by ='$owner_id' AND state=2 LIMIT $limit OFFSET $offset");
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
        $result = AbstractModel::dbQuery('SELECT * FROM projects WHERE state = 1 ORDER BY created_at DESC LIMIT 4 OFFSET 0');
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

    public static function setState($id, $state, $refusalMsg, $userId)
    {
        return AbstractModel::dbQuery("UPDATE projects SET state = '$state', refusal_msg='$refusalMsg', approved_by='$userId' WHERE id = '$id'");
    }

    public static function setRejectedState($id, $refusalMsg)
    {
        return AbstractModel::dbQuery("UPDATE projects SET state = 2, refusal_msg='$refusalMsg' WHERE id = '$id'");
    }

    public static function setDeleteState($id)
    {
        return AbstractModel::dbQuery("UPDATE projects SET state = 3 WHERE id = '$id'");
    }

    public static function getListProjectById($id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE id = '$id'");
        $project=$result->fetch_object('AINET\MVC\Model\Project');
        return $project;
    }

    public static function getProjectImg($id)
    {
        $projectImgURL = './Storage/app/';
        $projectImgName =  AbstractModel::dbQuery("SELECT int_file FROM media WHERE project_id = '$id'");

        $projectImgName = mysqli_fetch_row($projectImgName);
        $projectImgName = $projectImgName[0];


        $projectImgURL = $projectImgURL . $projectImgName;

        return $projectImgURL;
    }

    public static function getLastUpdatedProjects()
    {
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE  state = 1 ORDER BY updated_at DESC LIMIT 3 OFFSET 0");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }

        //var_dump($projects);
        return $projects;
    }

    public static function searchProject($searchString, $limit, $offset)
    {
        $searchString = "%".$searchString."%";
        $result = AbstractModel::dbQuery("SELECT * FROM projects WHERE state=1 AND (name LIKE '$searchString' OR acronym LIKE '$searchString' OR description LIKE '$searchString' OR type LIKE '$searchString' OR theme LIKE '$searchString' OR keywords LIKE '$searchString' OR used_software LIKE '$searchString') LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }

        //var_dump($projects);
        return $projects;
    }

    public static function getNumberOfAprovedProjects()
    {
        return mysqli_num_rows(AbstractModel::dbQuery("SELECT * FROM projects WHERE state=1"));
    }

    public static function getNumberOfProjectsByOwner($owner_id)
    {
        return mysqli_num_rows(AbstractModel::dbQuery("SELECT * FROM projects WHERE created_by = '$owner_id' "));
    }

    public static function getNumberOfFoundedProjects($searchString)
    {
        return mysqli_num_rows(AbstractModel::dbQuery("SELECT * FROM projects WHERE state=1 AND (name LIKE '$searchString' OR acronym LIKE '$searchString' OR description LIKE '$searchString' OR type LIKE '$searchString' OR theme LIKE '$searchString' OR keywords LIKE '$searchString' OR used_software LIKE '$searchString')"));
    }

    public static function getProjectsOrderByOwner($order, $limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT p.* FROM projects p JOIN users u ON p.created_by=u.id WHERE p.state = 1  ORDER BY u.name $order LIMIT $limit OFFSET $offset");
        $projects = [];
        if ($result) {
            while($project = $result -> fetch_object('AINET\MVC\Model\Project')) {
                array_push($projects, $project);
            }
        }

        return $projects;
    }

    public static function addProject($project)
    {
        $name = $project['name'];
        $description = $project['description'];
        $acronym = $project['acronym'];
        $type = $project['type'];
        $theme = $project['theme'];
        $keywords = $project['keywords'];
        $usedSoftware = $project['usedSoftware'];
        $usedHardware = $project['usedHardware'];
        $observations = $project['observations'];
        $finishedAt =  $project['observations'];
        $startedAt =  $project['startedAt'];
        $createdBy = $project['accountId'];
        $updatedBy = $project['accountId'];
        $aprovedBy = $project['aprovedBy'];

        $state = $project['state'];

        $replacesId = null;
        $featuredUntil = null;


        if ($acronym == "") {
            $acronym = null;
        }
        if ($type == "") {
            $type = null;
        }
        if ($theme == "") {
            $theme = null;
        }
        if ($keywords == "") {
            $keywords = null;
        }
        if ($usedSoftware == "") {
            $usedSoftware = null;
        }
        if ($usedHardware == "") {
            $usedHardware = null;
        }
        if ($observations == "") {
            $observations = null;
        }
        if ($finishedAt != "") {
            $finishedAt = strtotime($finishedAt);
            $finishedAt = date("Y-m-d", $finishedAt);
        }
        else {
            $finishedAt = null;
        }

        $startedAt = strtotime($startedAt);
        $startedAt = date("Y-m-d", $startedAt);


        //INSERIR NA BD
        $query = 'INSERT INTO projects (name, acronym, description, type, theme, keywords, started_at, finished_at, created_by, updated_by, approved_by, used_software, used_hardware, observations, featured_until, replaces_id, state, refusal_msg ,deleted_at, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,null, null, NOW(), NOW())';
        $conn = self::dbConnection();
        $stm = $conn->prepare($query);
        if ($stm) {
            $stm->bind_param("ssssssssiiisssdii", $name, $acronym, $description, $type, $theme, $keywords, $startedAt, $finishedAt, $createdBy, $updatedBy, $aprovedBy, $usedSoftware, $usedHardware, $observations, $featuredUntil, $replacesId, $state);
            if ($stm->execute()) {
                $redirect = urlHelper::urlBuilder("dashBoards.php");
                header($redirect);
                exit(0);
            }else {
                $redirect = urlHelper::urlBuilder("errorPage.php");
                header($redirect);
            }

        }
        else {
            $redirect = urlHelper::urlBuilder("errorPage.php");
            header($redirect);
        }
    }

    public static function saveProject($project)
    {
        $projectId = $project['projectId'];
        $name = $project['name'];
        $description = $project['description'];
        $acronym = $project['acronym'];
        $type = $project['type'];
        $theme = $project['theme'];
        $keywords = $project['keywords'];
        $usedSoftware = $project['usedSoftware'];
        $usedHardware = $project['usedHardware'];
        $observations = $project['observations'];
        $finishedAt =  $project['finishedAt'];
        $startedAt =  $project['startedAt'];
        $state = $project['state'];

        $updatedBy = $project['accountId'];
        $aprovedBy = null;

        $replacesId = null;
        $featuredUntil = null;


        if ($acronym == "") {
            $acronym = null;
        }
        if ($type == "") {
            $type = null;
        }
        if ($theme == "") {
            $theme = null;
        }
        if ($keywords == "") {
            $keywords = null;
        }
        if ($usedSoftware == "") {
            $usedSoftware = null;
        }
        if ($usedHardware == "") {
            $usedHardware = null;
        }
        if ($observations == "") {
            $observations = null;
        }
        if ($finishedAt != "") {
            $finishedAt = strtotime($finishedAt);
            $finishedAt = date("Y-m-d", $finishedAt);
        }
        else {
            $finishedAt = null;
        }
        $startedAt = strtotime($startedAt);
        $startedAt = date("Y-m-d", $startedAt);


        //INSERIR NA BD
        $query = "UPDATE projects SET name = ?, acronym = ?, description = ?, type = ?, theme = ?, keywords = ?, started_at = ?, finished_at = ?, updated_by = ?, approved_by = ?, used_software = ?, used_hardware = ?, observations = ?, featured_until = ?, replaces_id = ?, state = ?, updated_at = NOW() WHERE id='$projectId'";
        //$query = null;
        $conn = self::dbConnection();
        $stm = $conn->prepare($query);
        if ($stm) {

            $stm->bind_param("ssssssssiisssdii", $name, $acronym, $description, $type, $theme, $keywords, $startedAt, $finishedAt, $updatedBy, $aprovedBy, $usedSoftware, $usedHardware, $observations, $featuredUntil, $replacesId, $state);
            if ($stm->execute()) {
                $redirect = urlHelper::urlBuilder("dashBoards.php");
                header($redirect);
                exit(0);
            }else {
                $redirect = urlHelper::urlBuilder("errorPage.php");
                header($redirect);
            }

        }
        else {
            $redirect = urlHelper::urlBuilder("errorPage.php");
            header($redirect);
        }
    }

}