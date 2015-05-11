<?php namespace AINET\MVC\Model;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 14:56
 */



class Account extends AbstractModel
{
	public $id;
	public $email;
	public $password;
	public $name;
	public $registeredAt;
	public $role;

	public static function all()
	{

		$result = AbstractModel::dbQuery('select * from users');
		$users = [];
		if($result){
			while($user = $result->fetch_object('Ainet\Models\User')){
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

	public static function findByEmail($email)
	{
		$users = self::all();
		foreach($users as $id => $user) {
			if($user->email==$email) {
				return $user;
			}
		}
		return null;
	}
}