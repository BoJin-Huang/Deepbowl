<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "sql203.byethost22.com";
$database= "b22_21301895_food";
$username= "b22_21301895";
$password= "huang0910976666";
$Byet_MySQL = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("set names 'utf8'");
?>