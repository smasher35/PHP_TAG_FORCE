<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 17-06-2015
 * Time: 22:58
 */

namespace Ainet\Support;


class urlHelper
{

    public static function urlBuilder($path)
    {
        global $baseUrl;

        return "Location: " . $baseUrl . $path;
    }
}