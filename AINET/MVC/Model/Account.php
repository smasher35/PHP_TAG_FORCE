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

		$result = AbstractModel::dbQuery('select * from users');
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
		$users = self::all();
		foreach($users as $id => $user) {
			if($user->email==$email) {
				if($user->password ==$pass){
					return $user;
				}
			}
		}
		return null;
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
		//INSERIR NA BD

		$query = 'insert into users (name,email,al_email,password,institution_id,position,photo_url,profile_url,flags,role,remember_token,created_at,updated_at) values (?,?,?,?,?,?,?,?,?,?,?,2,2)';
		$conn = self::dbConnection();
		$stm = $conn->prepare($query);
		if ($stm) {
			$stm->bind_param("ssssisisiisdd",$account->name,$account->email,$account->al_email,$account->password,$account->institution_id,$account->position,$account->photo_url,$account->profile_url,$account->flags,$account->role,$account->remember_token,$account->created_at,$account->updated_at);
			if ($stm->execute()) {
				header('Location: http://192.168.56.101/ficha06/dashBoards.php');
				exit(0);
			}else {
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
            case 1:
                return "Administrator";
                break;
            case 2:
                return "Editor";
                break;
            case 3:
                return "Author";
        }

    }

}