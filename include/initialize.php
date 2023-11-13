<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'boletasPago');
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.

require_once(LIB_PATH.DS."autonumbers.php");
require_once(LIB_PATH.DS."config.php");

require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."initialize.php"); 
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."settings.php"); 
?>