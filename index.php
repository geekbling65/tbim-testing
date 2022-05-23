<?php
ini_set("display_errors", 1);
// SET GLOBALS
define("_ROOTDIR_", getcwd() . "/");
define("_SYSDIR_", _ROOTDIR_ . "System/");
define("_SITEDIR_", _ROOTDIR_ . "Site/");
define("_SCRIPTDIR_", _ROOTDIR_ . "Scripts/");
define("_ERRDIR_", _ROOTDIR_ . "Errors/");
define("_CNTRLDIR_", _SYSDIR_ . "Controllers/");
define("_VIEWDIR_", _SYSDIR_ . "Views/");
define("_TPLDIR_", _SITEDIR_ . "Templates/");
define("_POSTDIR_", _SITEDIR_ . "Post/");
define("_STDIR_", _SITEDIR_ . "Static/");
// GET CONTROLLER FOR URL PARAMETERS
require_once(_SYSDIR_ . "Template.php");
require_once(_SYSDIR_ . "Directory.php");
require_once(_SYSDIR_ . "Controller.php");
require_once(_SYSDIR_ . "Views.php");
