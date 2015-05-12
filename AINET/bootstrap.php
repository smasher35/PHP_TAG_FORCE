<?php
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 11/05/2015
 * Time: 10:38
 */

require 'Config/config.php';

set_include_path(get_include_path().PATH_SEPARATOR.realpath('..'));
spl_autoload_register();

session_start();