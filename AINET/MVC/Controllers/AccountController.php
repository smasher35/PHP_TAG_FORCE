<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Project;
use AINET\support\InputHelper;
use AINET\MVC\Model\Account;


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
		return Account::all();
	}

	public function getRole($mail){
		return Account::getAccountRole($mail);
	}

	public function addAccount($account)
	{
		Account::add($account);
	}

	public function editAccount(){

		if(empty($_POST)){
			$id = InputHelper::get('user_id');
			if($id == null) {
				header('Location: http://192.168.56.101/AINET/dasboard.php');//manda para a página de user.php
			}

			//como é  a primeira vez não tem erros envia false
			return [Account::find($id),false];
		}

		$user = new Account();
		$errors = $this->validateInput($user, false);
		if (empty($errors)){
			Account::save($user);
		}

		return[$user, $errors];
	}

	public function validateInput ($account, $validatepassword= true)
	{
		$account->name = InputHelper::post('name');
		$account->email = InputHelper::post('email');
		$account->password = InputHelper::post('password');
		$passwordConfirmation = InputHelper::post('retypePass'); //*Variavel local com o mesmo nome (podia ser diferente) da variavel global password */
		$account->institution = InputHelper::post('institution');
		$account->position = InputHelper::post('position');
		$account->photo_url = InputHelper::post('photoUrl');
		$account->profile_url = InputHelper::post('inputUrl');
		$account->flags = InputHelper::post('statusRadio');
		$account->role = InputHelper::post('role');


		$errors = [];

		if($account->name) {
			if(!preg_match("/^[a-zA-Z ]+$/",$account->name)) {
				$errors['fullname'] = 'Invalid Name';
			}
		}
		if($account->email) {
			$validemail = filter_var($account->email, FILTER_VALIDATE_EMAIL);
			if(!$validemail) {
				$errors['email'] = 'Invalid Email Format';
			}
		}else {
			$errors['email'] = 'Email is Required';
		}

		if($validatepassword){
			if(strlen($account->password)<5) {
				$errors['password'] = 'Password must have at least 5 characters';
			}
			elseif($account->password != $passwordConfirmation) {
				$errors['password'] = 'Passwords don\'t match';
			}
		}

		return $errors;
	}
    public function getUserName($id)
    {
        return Account::getName($id);
    }
    public function getRoleName($roleId)
    {
        return Account::getAccountRoleName($roleId);
    }

    public function getListActiveAcounts()
    {
        return Account::getActiveAccounts();
    }

    public function getListDisabledAccounts()
    {
        return Account::getDisabledAccounts();
    }

    public function getListDeletedAccounts()
    {
        return Account::getDeletedAccounts();
    }

    public function setDisabledAccount($id)
    {
        var_dump($id);
        Account::setState($id, 0);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#accountsManagement');
    }

    public function setEnabledAccount($id)
    {
        Account::setState($id, 1);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#accountsManagement');
    }


    public function setDeletedAccount($id)
    {
        Account::setState($id, 2);
        header('Location: http://192.168.56.101/PHP_TAG_FORCE/AINET/dashBoards.php#accountsManagement');
    }

    public function getProfileImgUrl($id)
    {
        $userProfileImgUrl = Account::getProfileImg($id);

        return $userProfileImgUrl;
    }

    public function getUserId($email)
    {
        return Account::getUserId($email);
    }

    public function getUserInstitutionId($id)
    {
        return Account::getUserInstitutionId($id);
    }
}