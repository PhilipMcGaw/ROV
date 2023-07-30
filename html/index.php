<?php
header('Pragma: no-cache');

define('BASE_DIR', dirname(__FILE__));

require_once (BASE_DIR.'/config.inc');

include_once (BASE_DIR.'/header.php');
include_once (BASE_DIR.'/navbar.php');
include_once (BASE_DIR.'/camera.php');
include_once (BASE_DIR.'/footer.php');