<?php
//include dtatbase and do things accrodingly with query
	require("db_conn.php");
	function regist($first,$last,$mail,$pass, $num){


		global $connection;
		$tbl_name ="member";
		$query = "insert into $tbl_name(f_name,l_name,email,pass,phone) values($f_name,$l_name,$mail,$pass,$num);
			//ORDER BY tu.user_login DESC

		$result = oci_parse( $connection,$query);
		oci_execute($result);
		if (!$result) {
			return 0;
		}
		else {
			return $result;
		}

	}
?>