<?php namespace AINET\MVC\Controllers;

use AINET\support\InputHelper;
use AINET\MVC\Model\Account;

class AuthenticationController {
	public $account;
	private $authenticated = false;
	public $errors = false;

	function __construct()
	{

		if(isset($_SESSION['authenticated'])) {
			$user = Account::findByEmail($_SESSION['email']);
			$this->authenticated=true;
		}
		elseif(!empty($_POST)) {
			$mail = InputHelper::post('email');
			$pass = InputHelper::post('password');
			$user = Account::findByEmail($mail);

			if (is_null($user)) {
				$this->account = new Account();
				$this->account->email = $mail;
				$this->errors = ['email' => 'Invalid user or password'];
				return;
			}
			else {
				$this->account = $user;
				$this->authenticated = true;
				$_SESSION['authenticated']= true;
				$_SESSION['email'] = $mail;
			}
		} else {
			$this->account = new Account();
		}

	}

	function isAuthenticated()
	{
		return $this->authenticated;
	}

	static function redirectToLogin()
	{
		header('Location: http://192.168.56.101/Projecto/trunk/AINET/login.php');
		exit();
	}

	static function redirectToHome()
	{
		header('Location: http://192.168.56.101/Projecto/trunk/AINET/index.php');
		exit();
	}

	static function redirectToDashBoard()
	{
			header('Location: http://192.168.56.101/Projecto/trunk/AINET/dashBoards.php');
			exit();
	}

	public static function  logout()
	{
		$_SESSION=[];
		session_destroy();
		self::redirectToLogin();
	}

	public function getAccountRole ()
	{
		return $this->account->role;
	}
}