<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$doc =& JFactory::getDocument();
$doc->addScript("includes/jquery.js");
$doc->addScript("modules/mod_slimbox/js/slimbox2.js");
$doc->addStyleSheet("modules/mod_slimbox/css/slimbox2.css");
?>