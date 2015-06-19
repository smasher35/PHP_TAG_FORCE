<?php namespace AINET\MVC\Controllers;

use AINET\MVC\Model\Account;
use AINET\support\InputHelper;
use Ainet\Support\urlHelper;

class AuthenticationController
{
    public $account;
    private $authenticated = false;
    public $errors = false;

    function __construct()
    {

        if (isset($_SESSION['authenticated'])) {
            $user = Account::findByEmail($_SESSION['email'], $_SESSION['password']);
            $this->authenticated = true;
        } elseif (!empty($_POST)) {
            $mail = InputHelper::post('email');
            $pass = InputHelper::post('password');
            $user = Account::findByEmail($mail, $pass);

            if (is_null($user)) {
                $this->account = new Account();
                $this->account->email = $mail;
                $this->account->password = $pass;
                $this->errors = ['email' => 'Invalid user or password'];

                return;
            } else {

                if ($user->flags != 1) {
                    $this->errors = ['flags' => 'Disabled User - Contact the Administrator'];
                    $this->account = new Account();
                    $this->account->email = $mail;
                    $this->account->password = $pass;

                    return;

                }
                $this->account = $user;
                $this->authenticated = true;
                $_SESSION['authenticated'] = true;
                $_SESSION['email'] = $mail;
                $_SESSION['password'] = $pass;
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
        $redirect = urlHelper::urlBuilder("login.php");
        header($redirect);
        exit();
    }

    static function redirectToHome()
    {
        $redirect = urlHelper::urlBuilder("index.php");
        header($redirect);
        exit();
    }

    static function redirectToDashBoard()
    {

        $redirect = urlHelper::urlBuilder("dashBoards.php");
        header($redirect);
        exit();
    }

    static function redirectToAccountBrowsing()
    {

        $redirect = urlHelper::urlBuilder("accountsBrowsing.php");
        header($redirect);
        exit();
    }

    static function redirectToProjectsBrowser()
    {

        $redirect = urlHelper::urlBuilder("projects.php");
        header($redirect);
        exit();
    }

    public static function  logout()
    {
        $_SESSION = [];
        session_destroy();
        self::redirectToHome();
    }
}