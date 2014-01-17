<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connectn = "localhost";
$database_connectn = "webstreet";
$username_connectn = "root";
$password_connectn = "";
$connectn = mysql_pconnect($hostname_connectn, $username_connectn, $password_connectn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>