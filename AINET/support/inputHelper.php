<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 18/04/2015
 * Time: 15:52
 */
namespace Ainet\Support;

class InputHelper
{
	public static function get($key, $default = null)
	{
		if (isset($_GET[$key])) {
			return $_GET[$key];
		}
		return $default;
	}

	public static function post($key, $default = null)
	{
		if (isset($_POST[$key])) {
			return $_POST[$key];
		}
		return $default;
	}
}
