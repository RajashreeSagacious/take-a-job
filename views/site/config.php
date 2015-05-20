<?php
/**
 * DB Configuration
 */
define('DB_HOST',			'localhost');
define('DB_USER',			'user_pass');
define('DB_PASS',			'userpass');
define('DB_NAME',			'varun');
$limit = 10; #item per page
# db connect
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
$db = mysql_select_db(DB_NAME, $link); 

?>