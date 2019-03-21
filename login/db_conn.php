<?php
	$db['user_name'] = "db_oracle";
	$db['pass_word'] = "ruby";
	$db['name'] = "//localhost/orcl";
    //$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.1.34)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))" ;
//oci_pconnect("phphol", "welcome", "//localhost/orcl");
	//$connection = oci_connect($db['user_name'],$db['pass_word'],$db['name'] );
	$connection = oci_connect("db_oracle","ruby","//localhost/XE" );
	if(!$connection){
		die("Error connecting to the database server");
	}
	print("connecting to your database");
	//$db_name = mysql_select_db($db['name'], $connection);
?>
