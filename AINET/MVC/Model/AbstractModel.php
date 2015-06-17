<?php namespace AINET\MVC\Model;
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 17:45
 */
class AbstractModel {
	private static $conn;

    protected static function dbConnection()
	{
		global $database;
		if(!isset(self::$conn)) {
            @self::$conn = new \mysqli($database['host'], $database['user'], $database['password'], $database['database']);
        }

		return self::$conn;
	}

	protected static function dbQuery($query)
	{
		$conn = self::dbConnection();
        mysqli_set_charset($conn,"utf8");
		$result = $conn->query($query);
		return $result;
	}

	protected static function dbClose()
	{

	}
}