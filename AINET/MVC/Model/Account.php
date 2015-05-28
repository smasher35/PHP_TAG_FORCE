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

		$result = AbstractModel::dbQuery("select id,email,role from users WHERE email ='$account' ");

		if(!$result){
			echo 'Bad Connection';
			exit;
		}

		$row = mysqli_fetch_row($result);


		return $row[2];
	}

}