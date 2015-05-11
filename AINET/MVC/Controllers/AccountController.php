<?php namespace AINET\MVC\Controllers;

use Ainet\Support\InputHelper;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 15:35
 */




class AccountController
{
	public function __construct()
	{

	}

	public function listUsers ()
	{
		return \Account::all();
	}

	public function addAccount()
	{

		$user = new \Account();
		$errors = false;

		if(empty($_POST)) {
			return[$user, false];
		}

		$errors = $this->validateInput($user);
		if (empty($errors)){
			\Account::add($user);
		}

		return[$user, $errors];
	}

	public function editAccount(){

		if(empty($_POST)){
			$id = InputHelper::get('user_id');
			if($id == null) {
				header('Location: http://192.168.56.101/AINET/dasboard.php');//manda para a página de user.php

			}

			//como é  a primeira vez não tem erros envia false
			return [\Account::find($id),false];
		}

		$user = new \Account();
		$errors = $this->validateInput($user, false);
		if (empty($errors)){
			\Account::save($user);
		}

		return[$user, $errors];
	}
}