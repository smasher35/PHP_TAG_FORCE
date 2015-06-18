<?php namespace AINET\MVC\Model;

use Ainet\Support\urlHelper;

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 01/06/2015
 * Time: 20:37
 */




class Institution extends AbstractModel {
	public $id;
	public $name;

	public function __construct()
	{

	}

	//devolve a id da instituição mediante o respectivo nome
	public static function getId($name)
	{
		//Query à base de dados combase no email do user logado
		$result = AbstractModel::dbQuery("select id,name from institutions WHERE name ='$name' ");

		//caso não consiga ligar dá mensagem de erro TODO:passar a mensagem para formatação bootstrap
		if(!$result){
			echo 'Bad Connection';
			exit;
		}

		//devolve a linha do user encontrado
		$row = mysqli_fetch_row($result);

		//devolve apenas o role do user
		return $row[0];

	}

	//devolve o nome da instituição mediante a respectiva ID
	public static function getName($id)
	{
		//Query à base de dados combase no email do user logado
		$result = AbstractModel::dbQuery("select id,name from institutions WHERE id ='$id' ");

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


	public static function all()
	{

		$result = AbstractModel::dbQuery('select * from institutions');
		$institutions = [];
		if($result){
			while($institution = $result->fetch_object('AINET\MVC\Model\Institution')){
				array_push($institutions,$institution);
			}
		}
		return $institutions;

	}



}