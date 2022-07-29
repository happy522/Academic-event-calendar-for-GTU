<?php
require_once './library/config.php';
require_once './library/functions.php';

checkFDUser();

$content = 'views/dashboard.php';
$pageTitle = 'Academic Event Calendar';
$script = array();

require_once 'include/template.php';
?>