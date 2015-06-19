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
        if ($errors && array_key_exists($key, $errors)) {
            return '<div class="alert alert-danger" role="alert"><span class="error">' . $errors[$key] . '</span></div>';
        }
    }

    public static function success($key, $success)
    {
        if ($success && array_key_exists($key, $success)) {
            return '<div class="alert alert-success" role="alert"><span class="error">' . $success[$key] . '</span></div>';
        }
    }

    // TODO: feel free to add more methods
}