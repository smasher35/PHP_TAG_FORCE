<?php namespace AINET\MVC\Controllers;

use AINET\support\InputHelper;
use AINET\MVC\Model\Account;
use Ainet\Support\urlHelper;

class AccountController
{
    public $errorsPass = false;


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

	public function editAccount($account)
    {
			Account::save($account);
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

		if ($account->name) {
			if (!preg_match("/^[a-zA-Z ]+$/",$account->name)) {
				$errors['fullname'] = 'Invalid Name';
			}
		}

		if ($account->email) {
			$validemail = filter_var($account->email, FILTER_VALIDATE_EMAIL);
			if(!$validemail) {
				$errors['email'] = 'Invalid Email Format';
			}
		} else {
			$errors['email'] = 'Email is Required';
        }

		if ($validatepassword) {
			if (strlen($account->password)<5) {
				$errors['password'] = 'Password must have at least 5 characters';
			} elseif ($account->password != $passwordConfirmation) {
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
        Account::setState($id, 0);
        $redirect = urlHelper::urlBuilder("dashBoards.php#accountsManagement");
        header($redirect);
    }

    public function setEnabledAccount($id)
    {
        Account::setState($id, 1);
        $redirect = urlHelper::urlBuilder("dashBoards.php#accountsManagement");
        header($redirect);
    }


    public function setDeletedAccount($id)
    {
        Account::setState($id, 2);
        $redirect = urlHelper::urlBuilder("dashBoards.php#accountsManagement");
        header($redirect);
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

    public function getUserById($account_id)
    {
        return Account::getUserById($account_id);
    }

    public function changePassword($password, $retypePassword, $accountId)
    {
        if ($password == $retypePassword) {
            $password = password_hash($password, PASSWORD_BCRYPT);
            Account::setPassword($password, $accountId);
            header("Location: editAccountPage.php?account_id=$accountId" . "&code=0");
        } else {
            $redirect = urlHelper::urlBuilder("changePasswordPage.php?account_id=") . $accountId . "&result_code=-1";
            header($redirect);
        }
    }

    public function countActiveDisableAccounts()
    {
        return Account::getNumberOfActiveAndDisabledAccounts();
    }

    public function listActiveAndDisableAccounts($limit, $offset, $orderBy,$sortOrder="ASC")
    {
        return Account::getActiveAndDisabledAccounts($limit, $offset,$orderBy,$sortOrder);

    }

    public function listActiveAndDisableAccountsOrderByInstitution($limit, $offset, $orderBy, $sortOrder = "ASC")
    {
        return Account::getActiveAndDisabledAccountsOrderByInstitution($limit, $offset,$orderBy,$sortOrder);
    }
}