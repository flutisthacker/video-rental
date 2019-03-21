<?php
//include dtatbase and do things accrodingly with query
//require("db_conn.php");
function check_login($user_name, $pass_word){
//		$naam=get_username();
	//		$pcode=get_userpass();
//if(($user_name==$naam) && ($pass_word == $pcode)){

		if(($user_name =="admin") && ($pass_word == "admin")){
			//set session
			$_SESSION['user_name'] = $user_name;
			$_SESSION['user_logged_in'] = true;
			return 1;

		}
		else{
			return 0;
		}
	}


	function get_userpass(){
		global $connection;
		$tbl_name ="login";
		$query = "SELECT  tu.password FROM 	$tbl_name as tu";
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

function get_username(){
		global $connections;

		$tbl_name ="login";
		$querya = "SELECT tu.username FROM $tbl_name as tu";
			//ORDER BY tu.user_login DESC

		$result1 = oci_parse( $connections,$querya	);
		oci_execute($result1);
		if (!$result1) {
			return 0;

		}
		else {
			return $result1;
		}

}
?>