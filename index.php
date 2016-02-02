<?php
define('BOX_ROOT', getcwd());
include_once(PROOT."/inc/path.inc");
require_once("modules/general/classSite.php");

$site = new classSite();
$site->run();
?>
