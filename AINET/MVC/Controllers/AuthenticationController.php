<?php namespace Ainet\controllers;

use Ainet\Support\InputHelper;

class AuthenticationController {
	public $user;
	private $authenticated = false;
	public $errors = false;

	function __construct()
	{

		if(isset($_SESSION['authenticated'])) {
			$user = User::findByEmail($_SESSION['email']);
			$this->authenticated=true;
		}
		elseif(!empty($_POST)) {
			$mail = InputHelper::post('email');
			$pass = InputHelper::post('password');
			$user = User::findByEmail($mail);

			if (is_null($user)) {
				$this->user = new User();
				$this->user->email = $mail;
				$this->errors = ['email' => 'Invalid user or password'];
				return;
			}
			else {
				$this->user = $user;
				$this->authenticated = true;
				$_SESSION['authenticated']= true;
				$_SESSION['email'] = $mail;
			}
		} else {
			$this->user = new User();
		}
	}

	function isAuthenticated()
	{
		return $this->authenticated;
	}

	static function redirectToLogin() {
		header('Location: http://192.168.56.101/AINET/login.php');
		exit();
	}

	static function redirectToHome() {
		header('Location: http://192.168.56.101/AINET/index.php');
		exit();
	}

	public static function  logout(){
		$_SESSION=[];
		session_destroy();
		self::redirectToLogin();
	}
}