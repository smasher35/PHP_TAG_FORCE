<?php
/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 18/04/2015
 * Time: 15:51
 */
namespace Ainet\Support;

class HtmlHelper
{
	public static function e($raw)
	{
		return htmlspecialchars($raw, ENT_QUOTES, 'UTF-8');
	}

	public static function error($key, $errors)
	{
		if($errors && array_key_exists($key, $errors)) {
			return '<span class="error">'.$errors[$key].'</span>';
		}
	}

	// TODO: feel free to add more methods
}