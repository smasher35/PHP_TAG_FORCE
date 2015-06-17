<?php namespace AINET\MVC\Model;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 14:56
 */



class Account extends AbstractModel
{
	public $id; //int
	public $name;//varchar(255)
	public $email;//varchar(255)
	public $alt_email;//varchar(255)NULL
	public $password;//varchar(255)
	public $institution_id;//int(10)unsigned
	public $position;//varchar(255)
	public $photo_url;//int(11)NULL
	public $profile_url;//varchar(255)NULL
	public $flags;//smallint(6)
	public $role;//int(10)unsigned
	public $remember_token;//varchar(100)NULL
	public $created_at;//timestamp[0000-00-00 00:00:00]
	public $updated_at;//timestamp[0000-00-00 00:00:00]


	public static function all()
	{

		$result = AbstractModel::dbQuery("select * from users");
		$users = [];
		if($result){
			while($user = $result->fetch_object('AINET\MVC\Model\Account')){
				array_push($users,$user);
			}
		}
		return $users;

	}
	public static function find($id)
	{
		$users = self::all();
		if (array_key_exists($id, $users)) {
			return $users[$id];
		}
		return null;
	}

	public static function findByEmail($email,$pass)
	{
        $user = self::getUserbyMail($email);

        if ($user != null){
            $storedPass = $user->password;

            if(password_verify($pass,$storedPass)) {
                return $user;
            }
        }
		return null;
	}

    public static function getUserId($email)
    {
        $user = self::getUserbyMail($email);

        if ($user != null){
                return $user->id;
        }
    }

    private static function  getUserbyMail($mail){

        $row = AbstractModel::dbQuery("SELECT * FROM users WHERE email = '$mail'");

        //devolve a linha do user encontrado
        $user = mysqli_fetch_object($row);

        return $user;
    }

	public static function getAccountRole($account)
	{
		//Query à base de dados combase no email do user logado
		$result = AbstractModel::dbQuery("select id,email,role from users WHERE email ='$account' ");

		//caso não consiga ligar dá mensagem de erro TODO:passar a mensagem para formatação bootstrap
		if(!$result){
			echo 'Bad Connection';
			exit;
		}

		//devolve a linha do user encontrado
		$row = mysqli_fetch_row($result);

		//devolve apenas o role do user
		return $row[2];
	}

	public static function add($account)
	{
        $photoUrl = $account['photoUrl'];
        $altEmail = $account['altEmail'];
        $profileUrl = $account['inputUrl'];

        if ($photoUrl == "") {
            $photoUrl = null;
        }
        if ($altEmail == "") {
            $altEmail = null;
        }
        if ($profileUrl == "") {
            $profileUrl = null;
        }
		//INSERIR NA BD
		$query = 'INSERT INTO users (name,email,alt_email,password,institution_id,position,photo_url,profile_url,flags,role,remember_token,created_at,updated_at) values (?,?,?,?,?,?,?,?,?,?,null,NOW(),NOW())';
		$conn = self::dbConnection();
		$stm = $conn->prepare($query);
		if ($stm) {
            $stm->bind_param("ssssisssii", $account['name'], $account['email'], $altEmail, $account['password'], $account['institution'], $account['position'], $photoUrl, $profileUrl, $account['status'], $account['role']);
			if ($stm->execute()) {
				header('Location: http://192.168.56.101/php_tag_force/AINET/dashBoards.php');
				exit(0);
			}else {
                echo $stm->error;
				//return error
			}
		}

	}

    //devolve o nome do user mediante a respectiva ID
    public static function getName($id)
    {
        //Query à base de dados combase no email do user logado
        $result = AbstractModel::dbQuery("select id, name from users WHERE id ='$id' ");

        //caso não consiga ligar dá mensagem de erro TODO:passar a mensagem para formatação bootstrap
        if(!$result){
            echo 'Bad Connection';
            exit;
        }

        //devolve a linha do user encontrado
        $row = mysqli_fetch_row($result);

        //devolve apenas o role do user
        return $row[1];
    }
    public static function getAccountRoleName($id)
    {
        switch($id) {
            case 4:
                return "Administrator";
                break;
            case 1:
                return "Editor";
                break;
            case 2:
                return "Author";
        }

    }

    //DISABLED = 0
    public static function getDisabledAccounts()
    {
        $result = AbstractModel::dbQuery("SELECT * FROM users WHERE flags = 0");
        $users = [];
        if ($result) {
            while($user = $result -> fetch_object('AINET\MVC\Model\Account')) {
                array_push($users, $user);
            }
        }
        return $users;
    }

    //ACTIVE = 1
    public static function getActiveAccounts()
    {
        $currentUser = $_SESSION['email'];
        $result = AbstractModel::dbQuery("SELECT * FROM users WHERE flags = 1 AND email != '$currentUser'");
        $users = [];
        if ($result) {
            while($user = $result -> fetch_object('AINET\MVC\Model\Account')) {
                array_push($users, $user);
            }
        }
        return $users;
    }

    //DELETED = 2
    public static function getDeletedAccounts()
    {
        $result = AbstractModel::dbQuery("SELECT * FROM users WHERE flags = 2");
        $users = [];
        if ($result) {
            while($user = $result -> fetch_object('AINET\MVC\Model\Account')) {
                array_push($users, $user);
            }
        }
        return $users;
    }

    public static function setState($id, $flag)
    {
        AbstractModel::dbQuery("UPDATE users SET flags = '$flag' WHERE id = '$id'");
    }

    public static function getProfileImg($id)
    {
        $profileImgURL = './Storage/app/profiles/';
        $profileImgName =  AbstractModel::dbQuery("SELECT photo_url FROM users WHERE id = '$id'");

        $profileImgName = mysqli_fetch_row($profileImgName);
        $profileImgName = $profileImgName[0];


        $profileImgURL = $profileImgURL . $profileImgName;

        return $profileImgURL;
    }

    public static function getUserInstitutionId($id)
    {
        //Query à base de dados combase no email do user logado
        $result = AbstractModel::dbQuery("select id,institution_id, name from users WHERE id ='$id' ");

        //caso não consiga ligar dá mensagem de erro TODO:passar a mensagem para formatação bootstrap
        if(!$result){
            echo 'Bad Connection';
            exit;
        }

        //devolve a linha do user encontrado
        $row = mysqli_fetch_row($result);

        //devolve apenas a id da instituição do user
        return $row[1];

    }

    public static function getUserById($account_id)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM users WHERE id ='$account_id'");
        $account = $result->fetch_object('AINET\MVC\Model\Account');
        return $account;
    }

    public static function setPassword($password, $accountId)
    {
        AbstractModel::dbQuery("UPDATE users SET password = '$password' WHERE id = '$accountId'");
    }

    public static function save($account)
    {
        $photoUrl = $account['photoUrl'];
        $altEmail = $account['altEmail'];
        $profileUrl = $account['inputUrl'];
        $accountId = $account['accountId'];

        if ($photoUrl == "") {
            $photoUrl = null;
        }
        if ($altEmail == "") {
            $altEmail = null;
        }
        if ($profileUrl == "") {
            $profileUrl = null;
        }
        //INSERIR NA BD
        $query = "UPDATE users SET name = ?, email = ?, alt_email = ?, institution_id = ?, position = ?, photo_url = ?, profile_url = ?, flags = ?, role = ?, updated_at = NOW() WHERE id='$accountId'";
        $conn = self::dbConnection();
        $stm = $conn->prepare($query);
        if ($stm) {
            $stm->bind_param("sssisssii", $account['name'], $account['email'], $altEmail, $account['institution'], $account['position'], $photoUrl, $profileUrl, $account['status'], $account['role']);
            if ($stm->execute()) {

                $redirect = "Location: http://192.168.56.101/php_tag_force/AINET/editAccountPage.php?account_id=" . $accountId;
                header($redirect);
                exit(0);
            }else {
                echo $stm->error;
                //return error
            }
        }
    }

    public static function getNumberOfActiveAndDisabledAccounts()
    {
        return mysqli_num_rows(AbstractModel::dbQuery("SELECT * FROM users WHERE flags = 0 OR flags = 1"));
    }

    public static function getActiveAndDisabledAccounts($limit, $offset)
    {
        $result = AbstractModel::dbQuery("SELECT * FROM users WHERE flags = 1 OR flags = 0 ORDER BY name ASC LIMIT $limit OFFSET $offset");
        $users = [];
        if($result){
            while($user = $result->fetch_object('AINET\MVC\Model\Account')){
                array_push($users,$user);
            }
        }
        return $users;
    }
}