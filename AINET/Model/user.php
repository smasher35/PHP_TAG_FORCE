<?php namespace Ainet\Model;



class user {

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